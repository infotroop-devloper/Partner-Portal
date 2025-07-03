<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "fetchNewPartnerRequests":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_partners where status='New' order by added_date desc ");
            $send_data = array();
            $i = 0;
            foreach($getpartners as $row){
                $id = $row['id'];
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['partner_uniqueid'] = $row['partner_uniqueid'];
                $send_data[$i]['primary_business_model'] = $row['primary_business_model'];
                $send_data[$i]['business_type'] = $row['business_type'];
                $send_data[$i]['partner_name'] = $row['partner_name'];
                $send_data[$i]['local_company_name'] = $row['local_company_name'];
                $send_data[$i]['local_company_name'] = $row['local_company_name'];
                $send_data[$i]['fullname'] = $row['fname']." ".$row['lname'];
                $send_data[$i]['email_id'] = $row['contact_phone_no'];
                $send_data[$i]['job_title'] = $row['job_title'];
                $send_data[$i]['job_role'] = $row['job_role'];
                $send_data[$i]['mobile_no'] = $row['contact_mobile_no'];
                $send_data[$i]['phone_no'] = $row['contact_phone_no'];
                $send_data[$i]['company_head'] = $row['company_head'];
                $send_data[$i]['website_url'] = $row['website_url'];
                $send_data[$i]['pan'] = $row['pan'];
                $send_data[$i]['gst'] = $row['gst'];
                $send_data[$i]['subsidary_name'] = $row['subsidary_company_name'];

                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id'");
				$docsArr = array();
				$j=0;
				foreach($getpartnerdocs as $doc){
					$docsArr[$j]['doc_name'] = $doc['doc_name'];
					$docsArr[$j]['doc_type'] = $doc['doc_type'];
					$j++;
				}
                $send_data[$i]['documents'] = $docsArr;
                
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
				"message" => "Invalid Request"
            ));
        }
        
        $final_res = $senddata;
	break;
    case "fetchInActivePartnerRequestsCount":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);

        if($tokendata->data->uid){
        $uid = $tokendata->data->uid;
        $email = $tokendata->data->email;
        $user_type = $tokendata->data->user_type;

        $countQuery = "SELECT COUNT(*) as total FROM masters_partners WHERE status='Declined' order by added_date desc ";
        $result = $qry->execSelectQuery($countQuery);

        $total = $result[0]['total'] ?? 0;

        $senddata = json_encode(array(
            "status" => "success",
            "message" => "Count Fetched",
            "data" => array(
                "Inactive_partner_requests_count" => $total
            )
        ));
        } else {
        $senddata = json_encode(array(
            "status" => "error",
            "message" => "Invalid Request"
        ));
        }

        $final_res = $senddata;
    break;
    case "fetchActivePartnerRequestsCount":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);

        if($tokendata->data->uid){
        $uid = $tokendata->data->uid;
        $email = $tokendata->data->email;
        $user_type = $tokendata->data->user_type;

        $countQuery = "SELECT COUNT(*) as total FROM masters_partners WHERE status='Approved' order by added_date desc ";
        $result = $qry->execSelectQuery($countQuery);

        $total = $result[0]['total'] ?? 0;

        $senddata = json_encode(array(
            "status" => "success",
            "message" => "Count Fetched",
            "data" => array(
                "active_partner_requests_count" => $total
            )
        ));
        } else {
        $senddata = json_encode(array(
            "status" => "error",
            "message" => "Invalid Request"
        ));
        }

        $final_res = $senddata;
    break;
    case "fetchNewPartnerRequestsCount":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);

        if($tokendata->data->uid){
        $uid = $tokendata->data->uid;
        $email = $tokendata->data->email;
        $user_type = $tokendata->data->user_type;

        $countQuery = "SELECT COUNT(*) as total FROM masters_partners WHERE status='New' order by added_date desc ";
        $result = $qry->execSelectQuery($countQuery);

        $total = $result[0]['total'] ?? 0;

        $senddata = json_encode(array(
            "status" => "success",
            "message" => "Count Fetched",
            "data" => array(
                "new_partner_requests_count" => $total
            )
        ));
        } else {
        $senddata = json_encode(array(
            "status" => "error",
            "message" => "Invalid Request"
        ));
        }

        $final_res = $senddata;
    break;
    case "fetchPartnerDocuments":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $id = $_POST['id'];
            $send_data = array();
            $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id'");
            $j=0;
            foreach($getpartnerdocs as $doc){
                $send_data[$j]['doc_name'] = $doc['doc_name']!='' ? DOC_URL_PATH.'partner_docs/'.$id.'/'.$doc['doc_name'] : '';
                $send_data[$j]['doc_type'] = $doc['doc_type'];
                $j++;
            }
			
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data Found",
                "data" =>$send_data
            ));
        }else{
            $senddata = json_encode(array(
				"status" => "error",
				"message" => "Invalid Request"
            ));
        }
        
        $final_res = $senddata;
	break;
    case "fetchActivatedPartners":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_partners where status='Approved' order by added_date asc ");
            $send_data = array();
            $i = 0;
            foreach($getpartners as $row){
                $id = $row['id'];
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['service_type'] = $row['service_type'];
                $send_data[$i]['service_subtype'] = $row['service_subtype'];
                $send_data[$i]['partner_name'] = $row['partner_name'];
                $send_data[$i]['full_name'] = $row['primary_full_name'];
                $send_data[$i]['email_id'] = $row['primary_corporate_email'];
                $send_data[$i]['job_function'] = $row['primary_job_function'];
                $send_data[$i]['job_function_role'] = $row['primary_job_function_role'];
                $send_data[$i]['mobile_no'] = $row['primary_mobile'];
                $send_data[$i]['phone_no'] = $row['primary_phone'];
                $send_data[$i]['company_head'] = $row['company_head'];
                $send_data[$i]['website_url'] = $row['website_url'];
                $send_data[$i]['pan'] = $row['pan'];
                $send_data[$i]['gst'] = $row['gst'];
                $send_data[$i]['subsidary_name'] = $row['subsidary_company_name'];

                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='gst_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='gst_certificate'){
                    $send_data[$i]['gst_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['gst_certificate'] = "";
                }
                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='reseller_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='reseller_certificate'){
                    $send_data[$i]['reseller_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['reseller_certificate'] = "";
                }
                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='address_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='address_certificate'){
                    $send_data[$i]['address_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['address_certificate'] = "";
                }
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
				"message" => "Invalid Request"
            ));
        }
        
        $final_res = $senddata;
	break;
    case "fetchDeactivatedPartners":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_partners where status='Declined' order by added_date asc ");
            $send_data = array();
            $i = 0;
            foreach($getpartners as $row){
                $id = $row['id'];
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['service_type'] = $row['service_type'];
                $send_data[$i]['service_subtype'] = $row['service_subtype'];
                $send_data[$i]['partner_name'] = $row['partner_name'];
                $send_data[$i]['full_name'] = $row['primary_full_name'];
                $send_data[$i]['email_id'] = $row['primary_corporate_email'];
                $send_data[$i]['job_function'] = $row['primary_job_function'];
                $send_data[$i]['job_function_role'] = $row['primary_job_function_role'];
                $send_data[$i]['mobile_no'] = $row['primary_mobile'];
                $send_data[$i]['phone_no'] = $row['primary_phone'];
                $send_data[$i]['company_head'] = $row['company_head'];
                $send_data[$i]['website_url'] = $row['website_url'];
                $send_data[$i]['pan'] = $row['pan'];
                $send_data[$i]['gst'] = $row['gst'];
                $send_data[$i]['subsidary_name'] = $row['subsidary_company_name'];

                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='gst_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='gst_certificate'){
                    $send_data[$i]['gst_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['gst_certificate'] = "";
                }
                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='reseller_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='reseller_certificate'){
                    $send_data[$i]['reseller_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['reseller_certificate'] = "";
                }
                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' and doc_type='address_certificate' ");
                if($getpartnerdocs[0]['doc_type']=='address_certificate'){
                    $send_data[$i]['address_certificate'] = URL_PATH.'partner_docs/'.$getpartnerdocs[0]['doc_name'];
                }else{
                    $send_data[$i]['address_certificate'] = "";
                }
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
				"message" => "Invalid Request"
            ));
        }
        
        $final_res = $senddata;
	break;
    case "fetchPartnerDetails":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){

            $id = $_POST['id'];
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_partners where id=$id ");
            $send_data = array();
            $i = 0;
            foreach($getpartners as $row){
                $id = $row['id'];
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['partner_uniqueid'] = $row['partner_uniqueid'];
                $send_data[$i]['country'] = $row['country'];
                $send_data[$i]['primary_business_model'] = $row['primary_business_model'];
                $send_data[$i]['business_type'] = $row['business_type'];
                $send_data[$i]['partner_name'] = $row['partner_name'];
                $send_data[$i]['local_company_name'] = $row['local_company_name'];
                $send_data[$i]['company_head'] = $row['company_head'];
                $send_data[$i]['website_url'] = $row['website_url'];
                $send_data[$i]['email_id'] = $row['email_id'];
                $send_data[$i]['phone_no'] = $row['phone_no'];
                $send_data[$i]['pan'] = $row['pan'];
                $send_data[$i]['gst'] = $row['gst'];
                $send_data[$i]['company_address'] = $row['company_address'];
                $send_data[$i]['primary_company_city'] = $row['primary_company_city'];
                $send_data[$i]['primary_company_state'] = $row['primary_company_state'];
                $send_data[$i]['primary_company_country'] = $row['primary_company_country'];
                $send_data[$i]['primary_company_zipcode'] = $row['primary_company_zipcode'];
                $send_data[$i]['is_subsidiary'] = $row['is_subsidiary'];
                $send_data[$i]['subsidary_company_name'] = $row['subsidary_company_name'];
                $send_data[$i]['sub_company_address'] = $row['sub_company_address'];
                $send_data[$i]['sub_city'] = $row['sub_city'];
                $send_data[$i]['sub_state'] = $row['sub_state'];
                $send_data[$i]['sub_country'] = $row['sub_country'];
                $send_data[$i]['sub_zipcode'] = $row['sub_zipcode'];
                $send_data[$i]['total_revenue'] = $row['total_revenue'];
                $send_data[$i]['active_customer'] = $row['active_customer'];
                $send_data[$i]['head_count'] = $row['head_count'];
                $send_data[$i]['sales_count'] = $row['sales_count'];
                $send_data[$i]['tech_count'] = $row['tech_count'];
                $send_data[$i]['salutation'] = $row['salutation'];
                $send_data[$i]['fname'] = $row['fname'];
                $send_data[$i]['lname'] = $row['lname'];
                $send_data[$i]['job_title'] = $row['job_title'];
                $send_data[$i]['job_role'] = $row['job_role'];
                $send_data[$i]['contact_email_id'] = $row['contact_email_id'];
                $send_data[$i]['contact_phone_no'] = $row['contact_phone_no'];
                $send_data[$i]['contact_mobile_no'] = $row['contact_mobile_no'];
                $send_data[$i]['contact_address'] = $row['contact_address'];
                $send_data[$i]['agree_tnc'] = $row['agree_tnc'];
                $send_data[$i]['last_agree_tnc'] = $row['last_agree_tnc'];
                $send_data[$i]['status'] = $row['status'];
                $send_data[$i]['added_date'] = date("d-m-Y h:i:s A",strtotime($row['added_date']));

                $getpartnerdocs = $qry->execSelectQuery(" SELECT * FROM masters_partner_documents where partner_idfk='$id' ");
                $j = 0;
                $docarr = array();
                foreach($getpartnerdocs as $doc){
                    $docarr[$j]['docurl'] = $doc['doc_name']!='' ? URL_PATH.'partner_docs/'.$doc['doc_name'] : '';
                    $j++;
                }
                $send_data[$i]['documents'] = $docarr;
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
                "message" => "Invalid Request"
            ));
        }
        $final_res = $senddata;
    break;
    case "fetchServiceType":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){

            $serviceType = $_POST['serviceType'];
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;
            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_service_sub_types where is_active=1 ");
            $send_data = array();
            $i = 0;
            foreach($getpartners as $row){
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['sub_type'] = $row['sub_type'];
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
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;
    break;
    case "uploadGstCertificate":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){

            $id = $_POST['id'];
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $file = $_FILES['file'];
            $uploadDir = UPLOADPATH.'partner_docs/';
            $uploadFile = $uploadDir;
            $originalFileName = $file['name'];
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileuploadedpath = date("Ymdhis").'_gst.' . $fileExtension;
        
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            if (!move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                $senddata = json_encode(array(
                    "status" => "error",
                    "message" => "File Not Uploaded."
                ));
            } 
            
            //fileuploadedpath
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents (partner_idfk,doc_name,doc_type,added_date)
                                    VALUES('$id','$fileuploadedpath','gst_certificate','$added_date') ");

            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data Found",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;
    break;
    case "uploadResellerCertificate":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){

            $id = $_POST['id'];
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $file = $_FILES['file'];
            $uploadDir = UPLOADPATH.'partner_docs/';
            $uploadFile = $uploadDir;
            $originalFileName = $file['name'];
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileuploadedpath = date("Ymdhis").'_reseller.' . $fileExtension;
        
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            if (!move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                $senddata = json_encode(array(
                    "status" => "error",
                    "message" => "File Not Uploaded."
                ));
            } 
            
            //fileuploadedpath
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents (partner_idfk,doc_name,doc_type,added_date)
                                    VALUES('$id','$fileuploadedpath','reseller_certificate','$added_date') ");

            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data Found",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;
    break;
    case "uploadAddressCertificate":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){

            $id = $_POST['id'];
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $file = $_FILES['file'];
            $uploadDir = UPLOADPATH.'partner_docs/';
            $uploadFile = $uploadDir;
            $originalFileName = $file['name'];
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileuploadedpath = date("Ymdhis").'_address.' . $fileExtension;
        
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            if (!move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                $senddata = json_encode(array(
                    "status" => "error",
                    "message" => "File Not Uploaded."
                ));
            } 
            
            //fileuploadedpath
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents (partner_idfk,doc_name,doc_type,added_date)
                                    VALUES('$id','$fileuploadedpath','address_certificate','$added_date') ");

            $senddata = json_encode(array(
                "status" => "success",
                "message" => "File uploaded successfully",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;
    break;
    case "savePartnerDetails":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $id = $_POST['id'];
            $country = $_POST['country'];
            $service_type = $_POST['service_type'];
            $sub_service_type = $_POST['sub_service_type'];
            $partner_name = $_POST['partner_name'];
            $local_company_name = $_POST['local_company_name'];
            $company_head = $_POST['company_head'];
            $email_id = $_POST['email_id'];
            $phone_no = $_POST['phone_no'];
            $website_url = $_POST['website_url'];
            $pan = $_POST['pan'];
            $is_subsidiary = $_POST['is_subsidiary']=='on' ? 1 : 0;
            $subsidary_company_name = $_POST['subsidary_company_name'];
            $address_line1 = $_POST['address_line1'];
            $address_line2 = $_POST['address_line2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $pcountry = $_POST['pcountry'];
            $zipcode = $_POST['zipcode'];
            $primary_full_name = $_POST['primary_full_name'];
            $primary_corporate_email = $_POST['primary_corporate_email'];
            $primary_phone = $_POST['primary_phone'];
            $primary_mobile = $_POST['primary_mobile'];
            $primary_job_function = $_POST['primary_job_function'];
            $primary_job_function_role = $_POST['primary_job_function_role'];
            $status = $_POST['status'];            
        
            $qry->execUpdateQuery(" UPDATE masters_partners SET service_type='$service_type',service_subtype='$sub_service_type',country='$country',partner_name='$partner_name',
            local_company_name='$local_company_name',company_head='$company_head',email_id='$email_id',phone_no='$phone_no',website_url='$website_url',
            pan='$pan',gst='$gst',is_subsidiary='$is_subsidiary',subsidary_company_name='$subsidary_company_name',address_line1='$address_line1',
            address_line2='$address_line2',city='$city',state='$state',pcountry='$pcountry',zipcode='$zipcode',
            primary_full_name='$primary_full_name',primary_corporate_email='$primary_corporate_email',primary_phone='$primary_phone',primary_mobile='$primary_mobile',
            primary_job_function='$primary_job_function',
            primary_job_function_role='$primary_job_function_role',status='$status' WHERE id='$id' ");

            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Data saved successfully",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;

    break;
    case "assignRoles":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
    break;
    case "acceptPartnerRequest":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            include_once '../common/mailer.php';
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $id = $_POST['id'];
                      
            $qry->execUpdateQuery(" UPDATE masters_partners SET `status`='Approved' WHERE id='$id' ");
    
            $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_partners where id='$id' ");
            
            if(sizeof($getpartners)>0){
                $jsonObj = $getpartners[0];
                $partner_id = $jsonObj['id'];
                $partner_uniqueid = $jsonObj['partner_uniqueid'];
                $email_id = $jsonObj['email_id'];
                $lname = $jsonObj['lname'];
                $fname = $jsonObj['fname'];
                $contact_mobile_no = $jsonObj['contact_mobile_no'];
                $password = bin2hex(random_bytes(16 / 2));
                $passwordmd5 = md5($password);
                $added_date = date("y-m-d h:i:s");

                $qry->execUpdateQuery(" INSERT INTO masters_users (firstname,lastname,email,username,pwd,temp_pwd,phone_no,user_type,partner_idfk,is_active,added_date)
                                    VALUES('$fname','$lname','$email_id','$email_id','','$passwordmd5','$contact_mobile_no',3,'$partner_id','1','$added_date') ");
                
                $maildata = array(
                    "smtp_host" => NOREPLY_SMTP,
                    "username" => NOREPLY_EMAIL_ID,
                    "password" => NOREPLY_PWD,
                    "encryption" => NOREPLY_SECURITY,
                    "smtp_port" => NOREPLY_PORT,
                    "recepitant" => "yashcrm101@gmail.com",
                    "template" => "../templates/welcome-message.php",
                    "mapping_string" => ["{{first_name}}","{{username}}","{{password}}"],
                    "mapping_data" => [$fname,$email_id,$password],
                    "Subject"=>"Welcome to Infotroop!",
                );
                $mailresult = mailTo($maildata);
            }
           
            die;
            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Partner Request Approved",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
            ));
        }

        $final_res = $senddata;
    break;
    case "declinePartnerRequest":
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $id = $_POST['id'];
                      
            $qry->execUpdateQuery(" UPDATE masters_partners SET `status`='Declined' WHERE id='$id' ");

            $senddata = json_encode(array(
                "status" => "success",
                "message" => "Partner Request Declined",
                "data" =>array()
            ));
        }else{
            $senddata = json_encode(array(
                "status" => "error",
                "message" => "Invalid Request"
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
