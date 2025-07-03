<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function generateUniqueString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}

function checkEmpty($oVar1, $oVar2) {
    return (is_null($oVar1) ? $oVar2 : $oVar1);
}

function str_sqlSafe($str = '') {
    $str1 = str_replace("\\", "\\\\", $str);
    $str1 = str_replace("'", "\'", $str);
    return $str1;
}

function executeQuery($con, $log, $sql, $throwErr = THROW_ERR) {
    $log->lwrite("query:" . $sql);
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $log->lwrite("Error:" . mysqli_error($con));
        if ($throwErr) {
            throw new Exception('ErrQuery=' . $sql);
        } else {
            throw new Exception('Server Error occured! Please try again. Contact Support, if error persists.');
        }
    }
    return $result;
}

function generateCode($length = 6, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getClientIP() {
    $client_ip_address = '';

    if (getenv('HTTP_CLIENT_IP')) {
        $client_ip_address = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $client_ip_address = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $client_ip_address = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $client_ip_address = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $client_ip_address = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $client_ip_address = getenv('REMOTE_ADDR');
    } else {
        $client_ip_address = 'UNKNOWN';
    }

    return $client_ip_address;
}

function maxId($fieldName, $tableName) {
    // $connected = db_con($con, "Default");
    $con = db_con("Default");  // db connection
    $maxIdValue = '';
    $sqlCmd = "select ifnull(max($fieldName),0)+1 as maxId from $tableName";
    if ($result = mysqli_query($con, $sqlCmd)) {
        $row = mysqli_fetch_array($result);
        $maxIdValue = $row[0];
    }
    return $maxIdValue;
};


function fetch_ke_data($strStd, $log, $qry) {
    $log->lwrite("start ke_data");
    if ($strStd == "") {
        $json_result = '{"status":"error",
                        "message":"API error: Invalid or No emails ",' .
                '"Errorcode":"err001",
                        "data":' . "{}" . '}';
        // die($json_result);
    }
    //
    $url = API_KE_PROGERSS_URL;
    $log->lwrite("API_KE_PROGERSS_URL =  " . API_KE_PROGERSS_URL);

    $post = '{"Client-Id": "' . API_KE_CLIENT_ID . '","Auth-Key": "' . "API_AUTH_KEY" . '","User-ids":"' . $strStd . '"}';
    $log->lwrite("Request =  " . $strStd);
    $post = '{"Client-Id": "' . API_KE_CLIENT_ID . '","Auth-Key": "' . API_KE_AUTH_KEY . '","User-ids":"' . $strStd . '"}';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //Setting it to text/xml instead.
    curl_setopt($ch, CURLOPT_HTTPHEADER, 'Content-Type: application/json');
    curl_setopt($ch, CURLOPT_HEADER, 'Content-Type: application/json');
    $output = curl_exec($ch);
    $log->lwrite("KE Response =  " . trim($output));
    $json = json_decode($output);
    $arrRes = json_decode(json_encode($json), true);
    // var_dump($json);
    // echo "================================================ \n";
    //var_dump($arrRes);
    if (curl_errno($ch)) {
        $json_result = '{"status":"error",
                        "message":"API error:"' . curl_error($ch) . ',' .
                '"Errorcode":"err001",
                        "data":' . "{}" . '}';
    } else {
        if ($json->status == '200') {
            // process result and update the database
            $i = 1;
            $arrRes = json_decode(json_encode($json), true);
            // var_dump($arrRes);
            $missing_ids = "";
            for ($i = 0; $i < sizeof($arrRes); $i++) {
                $email = $arrRes[$i]['username'];
                $dt = $arrRes[$i]['Datetime stamp'];
                // echo $email. "\n";
                if (is_array($arrRes[$i]['modules'])) {
                    $log->lwrite("Updating =  " . $email);
                    for ($m = 0; $m < sizeof($arrRes[$i]['modules']); $m++) {
                        $md = $arrRes[$i]['modules'][$m];
                        $moduleid = $md['module'];
                        $status = $md['status'];
                        $data = json_encode($md['data']);
                        // echo "  >> ". $moduleid. " -- ". $status. " data:". $data . " As On:". $dt . " \n";
                        $sql = "update tbl_student_course sc, tbl_user_master um, tbl_student st, tbl_course cs "
                                . "	set sc.progress_data='$data', "
                                . "	sc.status='$status', "
                                // . "	sc.progress_as_on = convert_tz('$dt','+00:00','+05:30') "
                                . "	sc.progress_as_on = now() "
                                . " where sc.std_id = st.std_id and st.user_id = um.user_id "
                                . " and sc.course_id = cs.course_id "
                                . " and um.email = '$email' and cs.provider_c_id = '$moduleid' ";
                        // . " and sc.progress_as_on < convert_tz('$dt','+00:00','+05:30')";
                        $log->lwrite("Query  =  " . $sql);
                        $ress = $qry->execUpdateQuery($sql);
                    }
                } else {
                    if (!empty($email)) {
                        $log->lwrite("Missing =  " . $email);
                        $sql = "update tbl_student_course sc, tbl_user_master um, tbl_student st, tbl_course cs set "
                                // . " sc.progress_data='{\"videos\":\"0\/0\",\"tests\":\"0\/0\"}', "
                                . "	sc.status='missing', "
                                // . "	sc.progress_as_on = convert_tz('$dt','+00:00','+05:30') "
                                . "	sc.progress_as_on = now() "
                                . " where sc.std_id = st.std_id and st.user_id = um.user_id "
                                . " and sc.course_id = cs.course_id and cs.provider_id=2"
                                . " and um.email = '$email' ";
                        $ress = $qry->execUpdateQuery($sql);
                        $missing_ids .= $email . ",";
                    }
                }
                // echo $arrRes[$i]['modules']. "\n";
            }
            $json_result = '{"status":"success","message": "Execution successful.",' .
                    '"Errorcode":"","data":{"missing_id":"' . $missing_ids . '"}}';
            //
            $log->lwrite("Missing IDs =  " . $missing_ids);
        } else {
            $json_result = '{"status":"error",
                        "message":"API error:' . $json->response . '",' .
                    '"Errorcode":"err001",
                        "data":' . "{}" . '}';
        }
    }
    curl_close($ch);
    return $json_result;
}

function fetch_ig_data($strStd, $log, $qry) {
    if ($strStd == "") {
        $final_res = '{"status":"error",
                        "message":"API error: Invalid or No emails ",' .
                '"Errorcode":"err001",
                        "data":' . "{}" . '}';
        die($final_res);
    }
    //
    $std_email = substr($strStd, 1, -1);
    $log->lwrite("IG std_email =  " . $std_email);

    // echo $std_email . "\r\n";
    $url = API_IG_TOKEN_URL; //   'https://sandbox.myigetit.com/token'; 
    $post = "grant_type=password&username=" . urlencode($std_email) . "&password=" . API_IG_PASSWORD;
    //$post = "grant_type=password&username=". urlencode("sunil.shinde@vit.edu"). "&password=". API_IG_PASSWORD;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //Setting it to text/xml instead.
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    $output = curl_exec($ch);
    
    if (curl_errno($ch)) {
        // echo  'error:' . curl_error($ch1);
        $final_res = '{"status":"error",
                        "message":"API error:"' . curl_error($ch1) . ',' .
                '"Errorcode":"err001",
                        "data":' . "{}" . '}';
        $output = '{"access_token":"invalid"}';
    }
    if (trim($output) == 'Bad Request') {
        $final_res = '{"status":"error",
                        "message":"API error:Trouble reaching iGETIT ",' .
                '"Errorcode":"err001",
                        "data":' . "{}" . '}';
        $output = '{"access_token":"invalid"}';
    }
    // got access token response
    $result = json_decode($output);
    $token = trim($result->access_token);
    $log->lwrite("IG response1 =  " . $token);

    $oldpath = $log->lfile();
    $tsFormat = LOGDURATION == 'per_hour' ? 'Ymd-H' : 'Ymd'; // if not hour assumed as per_day
    $nf = LOGPATH . date($tsFormat, time()) . "_IG.log";
    // ******************************************
    // call API for course URL using token
    if ($token <> 'invalid') {
        $url = API_IG_PROGERSS_URL; // "https://app.myigetit.com/v2/GetCourseDetail"; 
        $post = "Username=" . urlencode($std_email);
        // $post = "Username=". urlencode("sunil.shinde@vit.edu");
        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, $url);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization:Bearer ' . $token
        ));
        //Ignore SSL certificate verification
        curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
        //Setting it to text/xml instead.
        $result = curl_exec($ch1);
        $json = json_decode($result);
        $log->lwrite("IG response2 =  " . $result);
        // echo "$std_email~". date('Y-m-d h:i:s'). "~" . $result. "\r\n";

        
        if (curl_errno($ch)) {
            $log->lfile($nf);
            $log->lwrite("Error = $std_email ");
            $log->lwrite("Error = Token = $token ");
            $log->lwrite("IG Response2 = " . $result);
            $log->lfile($oldpath);

            $final_res = '{"status":"error",
                            "message":"API error:"' . curl_error($ch) . ',' .
                    '"Errorcode":"err001",
                            "data":' . "{}" . '}';
        } else if ($result == "") {
            $log->lfile($nf);
            $log->lwrite("Error = $std_email ");
            $log->lwrite("Error = Token = $token ");
            $log->lwrite("IG Response2 = " . $result);
            $log->lwrite("Error = blank response from IGGETIT");
            $log->lfile($oldpath);
            
            $final_res = '{"status":"error",
                            "message":"got blank response from IGGETIT",
                            "Errorcode":"err001",
                            "data":' . "{}" . '}';
        } else {
            // if($json->status == '200'){
            // process result and update the database
            $arrRes = json_decode(json_encode($json), true);
            // var_dump($arrRes);
            $std_email = $std_email;
            $dt = date('Y-m-d h:i:s');
            // echo $std_email. "\n";
            $log->lwrite("Updating =  " . $std_email);
            for ($m = 0; $m < sizeof($arrRes); $m++) {
                $md = $arrRes[$m];
                $moduleid = $md['ID'];
                $data = json_encode($md);
                // echo "  >> ". $moduleid. " -- ". $status. " data:". $data . " As On:". $dt . " \n";
                $sql = "update tbl_student_course sc, tbl_user_master um, tbl_student st, tbl_course cs "
                        . "	set sc.progress_data='$data', "
                        . "	sc.status='in progress', "
                        // . "	sc.progress_as_on = convert_tz('$dt','+05:30','+05:30') "
                        . "	sc.progress_as_on = now() "
                        . " where sc.std_id = st.std_id and st.user_id = um.user_id "
                        . " and sc.course_id = cs.course_id "
                        . " and um.email = '$std_email' and cs.provider_c_id = '$moduleid' ";
                // . " and sc.progress_as_on < convert_tz('$dt','+00:00','+05:30')";
                $ress = $qry->execUpdateQuery($sql);
                // echo $arrRes[$i]['modules']. "\n";
                $final_res = '{"status":"success","message": "Execution successful.",' .
                        '"Errorcode":"","data":{"missing_id":"' . $missing_ids . '"}}';
            }
        }
        curl_close($ch);
    } else {
        //$log->lwrite("Old path = $oldpath ");
        //$log->lwrite("new path = $nf ");
        $log->lfile($nf);
        $log->lwrite("Error = Invalid Token");
        $log->lwrite("Error = $std_email ");
        $log->lfile($oldpath);
        $final_res = '{"status":"error",
                            "message":"Invalid Token",
                            "Errorcode":"err001",
                            "data":' . "{}" . '}';
    }
}

function getFilesList($folderName, $log) {
    $showFiles = ',jpg,jpeg,png,gif,mp4,pdf,';
    $dir_path = MEDIA_FOLDER;
    $arrFiles = [];
    if (filetype($dir_path . $folderName) == "dir") {
        $child_path = $dir_path . $folderName;
        $log->lwrite("child =  " . $child_path);
        $b_files = scandir($child_path);
        $log->lwrite("child =  " . sizeof($b_files));
        $flCount = 0;
        for ($fl = 0; $fl < count($b_files); $fl++) {
            if (filetype($child_path . "/" . $b_files[$fl]) == "dir") {
                // ignore the child folders
            } else {
                $fileType = strtolower(pathinfo($child_path . "/" . $b_files[$fl], PATHINFO_EXTENSION));
                $log->lwrite("filetype =  " . $fileType);
                if (!strpos($showFiles, $fileType)) {
                    // skip file if its not of image or video type (extensions listed in showFiles)
                } else {
                    $filePath = MEDIA_URL . $folderName . "/" . $b_files[$fl];
                    $fileName = pathinfo($dir_path . $folderName . "/" . $b_files[$fl], PATHINFO_FILENAME);
                    $fileLink = "<a target='_blank' href='$filePath'>" . $b_files[$fl] . "</a>";
                    $arrFiles[] = '{"filePath":"' . $filePath . '",'
                            . '"fileType":"' . $fileType . '",'
                            . '"fileName":"' . $fileName . '"}';
                }
            }
        }
    }
    return $arrFiles;
}

?>
