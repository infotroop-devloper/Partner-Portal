<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "fetchServiceDeskList":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $getusers = $qry->execSelectQuery(" SELECT * FROM masters_users where uid='$uid' ");
            $partner_idfk = $getusers[0]['partner_idfk'];

            $getCustomerFromPartners = $qry->execSelectQuery(" SELECT msd.*,mc.customer_name,mp.partner_name FROM masters_service_desk msd
                                                                INNER JOIN masters_customer mc ON msd.customer_idfk=mc.id
                                                                INNER JOIN masters_partners mp ON msd.partner_idfk=mp.id
                                                                WHERE msd.partner_idfk = $partner_idfk
                                                                ORDER BY msd.request_date DESC; ");
            $i=0;
            $send_data = array();
            foreach($getCustomerFromPartners as $row){
                $send_data[$i] = array(
                    'id'=>$row['id'],
                    'partner_idfk'=>$row['partner_idfk'],
                    'customer_idfk'=>$row['customer_idfk'],
                    'request_id'=>$row['request_id'],
                    'service_type'=>$row['service_type'],
                    'status'=>$row['status'],
                    'request_date'=>date("d-m-Y h:i A",strtotime($row['request_date'])),
                    'last_updates'=>date("d-m-Y h:i A",strtotime($row['last_updates'])),
                    'customer_name'=>$row['customer_name'],
                    'partner_name'=>$row['partner_name']                    
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
    case "fetchServiceDeskDetails":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $id = $_POST['id'];

            $getCustomerFromPartners = $qry->execSelectQuery(" SELECT msd.*,mc.customer_name,mc.phone_no,mp.partner_name FROM masters_service_desk msd
                                                                INNER JOIN masters_customer mc ON msd.customer_idfk=mc.id
                                                                INNER JOIN masters_partners mp ON msd.partner_idfk=mp.id
                                                                WHERE msd.id=$id; ");
            $i=0;
            $send_data = array();
            foreach($getCustomerFromPartners as $row){
                $send_data[$i] = array(
                    'id'=>$row['id'],
                    'partner_idfk'=>$row['partner_idfk'],
                    'customer_idfk'=>$row['customer_idfk'],
                    'request_id'=>$row['request_id'],
                    'service_type'=>$row['service_type'],
                    'status'=>$row['status'],
                    'request_date'=>date("d-m-Y h:i A",strtotime($row['request_date'])),
                    'last_updates'=>date("d-m-Y h:i A",strtotime($row['last_updates'])),
                    'customer_name'=>$row['customer_name'],
                    'phone_no'=>$row['phone_no'],
                    'partner_name'=>$row['partner_name']                    
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
    case "saveServiceDeskDetails":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
           
            $request_id = $_POST['request_id'];
            $customer_name = $_POST['customer_name'];
            $partner_name = $_POST['partner_name'];
            $phone_no = $_POST['phone_no'];
            $id = $_POST['id'];
            $customer_idfk = $_POST['customer_idfk'];
            $partner_idfk = $_POST['partner_idfk'];
            $service_type = $_POST['service_type'];
            $status = $_POST['status'];
           
            $qry->execUpdateQuery(" UPDATE masters_service_desk SET 
                                    service_type='$service_type',
                                    status='$status'
                                    WHERE id=$id ");
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Service Request Updated Successfully."
            ));
			
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
