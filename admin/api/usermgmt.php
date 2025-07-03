<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "UpdateUserdetails":
        $hotel_json = $_POST["hotel_json"];
        $group_json = $_POST["group_json"];
        $email = $_POST["email"];
        $twofasql = "";
        if(isset($_POST["TwoFaCheckbox"])){
            $TwoFaCheckbox = $_POST["TwoFaCheckbox"]=='true' ? 1 : 0;
            $twofasql = " ,is_2fa=".$TwoFaCheckbox;
        }
        if($email != '' & $hotel_json != '' && $group_json != ''){
            $qry->execUpdateQuery(" UPDATE Identities SET hotel_tiles_access ='$hotel_json', 
                                    group_tiles_access = '$group_json' ".$twofasql."
                                                WHERE email = '$email' ");
        }
        $sendArr = array();
        $senddata = json_encode(array(
            "status" => "success",
            "msg" => "Identities Data Updated Successfully",
            "data" =>$sendArr));
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
