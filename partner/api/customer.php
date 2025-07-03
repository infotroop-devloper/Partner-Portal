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

            $getusers = $qry->execSelectQuery(" SELECT * FROM masters_users where uid='$uid' limit 1 ");
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
    case "fetchCustomerList":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getusers = $qry->execSelectQuery(" SELECT * FROM masters_users where `uid`='$uid' limit 1 ");
            $partner_idfk = $getusers[0]['partner_idfk'];
            $partner_managername = $getusers[0]['firstname']." ".$getusers[0]['lastname'];

            $getCustomerFromPartners = $qry->execSelectQuery(" SELECT * FROM masters_customer mc WHERE mc.partner_idfk='$partner_idfk' order by id desc ");
            $i=0;
            $send_data = array();
            foreach($getCustomerFromPartners as $row){
                $send_data[$i] = array(
                    'id'=>$row['id'],
                    'partner_idfk'=>$row['partner_idfk'],
                    'customer_name'=>$row['customer_name'],
                    'email_id'=>$row['email_id'],
                    'phone_no'=>$row['phone_no'],
                    'licence_id'=>$row['licence_id'],
                    'subscription_status'=>$row['subscription_status']
                );
                $i++;
            }
			
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data Found",
                "data" =>$send_data
            ));
        }else{
            $senddata = json_encode(array(
				"status" => "error",
				"message" => "Session Expired"
            ));
        }
        
        $final_res = $senddata;
	break;
    case "fetchCustomerDetail":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $id = $_POST['id'];

            $getCustomerFromPartners = $qry->execSelectQuery(" SELECT * FROM masters_customer mc WHERE mc.id='$id' ");
            $i=0;
            $send_data = array();
            foreach($getCustomerFromPartners as $row){
                $send_data[$i] = array(
                    'id'=>$row['id'],
                    'partner_idfk'=>$row['partner_idfk'],
                    'customer_name'=>$row['customer_name'],
                    'email_id'=>$row['email_id'],
                    'phone_no'=>$row['phone_no'],
                    'alt_phone_no'=>$row['alt_phone_no'],
                    'landline'=>$row['landline'],
                    'address1'=>$row['address1'],
                    'address2'=>$row['address2'],
                    'city'=>$row['city'],
                    'state'=>$row['state'],
                    'zipcode'=>$row['zipcode'],
                    'country'=>$row['country'],
                    'licence_id'=>$row['licence_id'],
                    'subscription_status'=>$row['subscription_status']
                );
                $i++;
            }
			
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data Found",
                "data" =>$send_data
            ));
        }else{
            $senddata = json_encode(array(
				"status" => "error",
				"message" => "Session Expired"
            ));
        }
        
        $final_res = $senddata;

    break;
    case 'saveCustomerDetail':
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $id = $_POST['id'];
            $getusers = $qry->execSelectQuery(" SELECT * FROM masters_customer where id='$id' ");
            if($getusers[0]['id']){
                $id = $getusers[0]['id'];
                $customer_name = $_POST['customer_name'];
                $address1 = $_POST['address1'];
                $address2 = $_POST['address2'];
                $phone_no = $_POST['phone_no'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
                $zipcode = $_POST['zipcode'];
                $email_id = $_POST['email_id'];
                $landline = $_POST['landline'];
                $alt_phone_no = $_POST['alt_phone_no'];
                $subscription_status = $_POST['subscription_status'];
                $licence_id = $_POST['licence_id'];
                
                $qry->execUpdateQuery(" UPDATE masters_customer SET 
                                        customer_name='$customer_name',
                                        address1='$address1',
                                        address2='$address2',
                                        phone_no='$phone_no',
                                        city='$city',
                                        `state`='$state',
                                        country='$country',
                                        zipcode='$zipcode',
                                        email_id='$email_id',
                                        landline='$landline',
                                        licence_id='$licence_id',
                                        subscription_status='$subscription_status',
                                        alt_phone_no='$alt_phone_no'
                                        WHERE id=$id ");
                $senddata = json_encode(array(
                    "status" => "success",
                    "message" => "Customer Updated Successfully."
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
