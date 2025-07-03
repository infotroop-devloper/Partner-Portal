<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "fetchprofile":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getusers = $qry->execSelectQuery(" SELECT* FROM masters_users where uid='$uid' limit 1 ");
			$send_data = array(
                'uid'=>$getusers[0]['uid'],
                'firstname'=>$getusers[0]['firstname'],
                'email'=>$getusers[0]['email'],
                'lastname'=>$getusers[0]['lastname'],
                'address1'=>$getusers[0]['address1'],
                'address2'=>$getusers[0]['address2'],
                'city'=>$getusers[0]['city'],
                'state'=>$getusers[0]['state'],
                'country'=>$getusers[0]['country'],
                'zipcode'=>$getusers[0]['zipcode'],
                'phone_no'=>$getusers[0]['phone_no'],
                'alt_phone_no'=>$getusers[0]['alt_phone_no']
            );
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Identity Found",
                "data" =>$send_data
            ));
        }else{
            $senddata = json_encode(array(
				"status" => "error",
				"message" => "Email-id And Password Required"
            ));
        }
        
        $final_res = $senddata;
	break;
	case 'saveprofile':
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getusers = $qry->execSelectQuery(" SELECT* FROM masters_users where uid='$uid' limit 1 ");
            if($getusers[0]['uid']){
                $uid = $getusers[0]['uid'];
                $firstname = $_POST['fname'];
                $lastname = $_POST['lname'];
                $address1 = $_POST['address1'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
                $zipcode = $_POST['zipcode'];
                $alt_phone_no = $_POST['alt_phone_no'];
                
                $qry->execUpdateQuery(" UPDATE masters_users SET 
                                        firstname='$firstname',
                                        lastname='$lastname',
                                        address1='$address1',
                                        address2='$address2',
                                        city='$city',
                                        `state`='$state',
                                        country='$country',
                                        zipcode='$zipcode',
                                        alt_phone_no='$alt_phone_no'
                                        WHERE uid=$uid ");
                $senddata = json_encode(array(
                    "status" => "success",
                    "message" => "Profile Updated Successfully."
                ));
            }else{
                $senddata = json_encode(array(
                    "status" => "error",
                    "message" => "Invalid Identity."
                ));
            }
			
        }else{
            $senddata = json_encode(array(
				"status" => "error",
				"message" => "Invalid Request."
            ));
        }
        
        $final_res = $senddata;

    break;
    default:
        // die("flash default");
        $res->is_error = "1";
        $res->error_msg = "OP(ration) not found " . $op;
        $final_res = '{ "status":"error",
                "message": "OP(ration) not found " '. $op. ',
                "Errorcode":"err002",
                "data":{} }';
	break;
}
