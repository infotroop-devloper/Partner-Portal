<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "fetchServiceType":
        $serviceType = $_POST['serviceType'];
        $getpartners = $qry->execSelectQuery(" SELECT * FROM masters_service_sub_types where service_type='$serviceType' AND is_active=1 ");
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

        $final_res = $senddata;
    break;
    case "createPartner":
        
        $country = $_POST['country'];
        $primary_business_model = $_POST['primary_business_model'];
        $business_type = $_POST['business_type'];
        $partner_name = $_POST['partner_name'];
        $local_company_name = $_POST['local_company_name'];
        $company_head = $_POST['company_head'];
        $website_url = $_POST['website_url'];
        $email_id = $_POST['email_id'];
        $phone_no = $_POST['phone_no'];
        $pan = $_POST['pan'];
        $gst = $_POST['gst'];
        $company_address = $_POST['company_address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pcountry = $_POST['pcountry'];
        $zipcode = $_POST['zipcode'];
        $is_subsidiary = $_POST['is_subsidiary'];
        $subsidary_company_name = $_POST['subsidary_company_name'];
        $sub_company_address = $_POST['sub_company_address'];
        $sub_city = $_POST['sub_city'];
        $sub_state = $_POST['sub_state'];
        $sub_pcountry = $_POST['sub_pcountry'];
        $sub_zipcode = $_POST['sub_zipcode'];
        $total_revenue = $_POST['total_revenue'];
        $active_customer = $_POST['active_customer'];
        $head_count = $_POST['head_count'];
        $sales_count = $_POST['sales_count'];
        $tech_count = $_POST['tech_count'];
        $salutation = $_POST['salutation'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $job_title = $_POST['job_title'];
        $job_role = $_POST['job_role'];
        $contact_email_id = $_POST['contact_email_id'];
        $contact_phone_no = $_POST['contact_phone_no'];
        $contact_mobile_no = $_POST['contact_mobile_no'];
        $contact_address = $_POST['contact_address'];
        $agree_tnc = $_POST['agree_tnc'];
        $last_agree_tnc = $_POST['last_agree_tnc'];
        $added_date = date("Y-m-d h:i:s");

        $qry->execUpdateQuery(" INSERT INTO infotroop.masters_partners (country, primary_business_model, business_type, partner_name, local_company_name, company_head, website_url, 
                email_id, phone_no, pan, gst, company_address, primary_company_city, primary_company_state, primary_company_country, primary_company_zipcode, is_subsidiary, subsidary_company_name, sub_company_address, sub_city,
                sub_state, sub_country, sub_zipcode, total_revenue, active_customer, head_count, sales_count, tech_count, salutation, fname, lname, job_title, job_role, contact_email_id, contact_phone_no, contact_mobile_no,
                contact_address, agree_tnc, last_agree_tnc, `status`, added_date)
                VALUES ('$country', '$primary_business_model', '$business_type', '$partner_name', '$local_company_name', '$company_head', '$website_url',
                '$email_id', '$phone_no', '$pan', '$gst', '$company_address', '$city', '$state', '$pcountry', '$zipcode', '$is_subsidiary', '$subsidary_company_name', '$sub_company_address', '$sub_city', '$sub_state', '$sub_pcountry',
                '$sub_zipcode', '$total_revenue', '$active_customer', '$head_count', '$sales_count', '$tech_count', '$salutation', '$fname', '$lname', '$job_title', '$job_role', '$contact_email_id', '$contact_phone_no', '$contact_mobile_no',
                '$contact_address', '$agree_tnc', '$last_agree_tnc', 'New', '$added_date') ");
        
        $lastrow = $qry->execSelectQuery(" select * from masters_partners order by id desc limit 1 ");
        $partner_id = $lastrow[0]['id'];
        $id = $lastrow[0]['id'];
        $partner_uniqueid = sprintf("ITSP%04d", $id);

        if($business_type=="Independent Business Consultant"){
            $govt_id_proof = '';
            if($_FILES['govt_id_proof']){
                $file = $_FILES['govt_id_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_govt_id_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $govt_id_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$govt_id_proof','govt_id_proof','0','$added_date') ");
            
            $address_document = '';
            if($_FILES['address_document']){
                $file = $_FILES['address_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_document','address_document','0','$added_date') ");
            
            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

        }elseif($business_type=="Proprietorship Firm"){
            $govt_id_proof = '';
            if($_FILES['govt_id_proof']){
                $file = $_FILES['govt_id_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_govt_id_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $govt_id_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$govt_id_proof','govt_id_proof','0','$added_date') ");
            
            $address_document = '';
            if($_FILES['address_document']){
                $file = $_FILES['address_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_document','address_document','0','$added_date') ");

            $business_document = '';
            if($_FILES['business_document']){
                $file = $_FILES['business_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_business_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $business_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$business_document','business_document','0','$added_date') ");
            
            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");
            
            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

        }elseif($business_type=="Partnership Firm"){

            $partnership_deed = '';
            if($_FILES['partnership_deed']){
                $file = $_FILES['partnership_deed'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_partnership_deed.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $partnership_deed = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$partnership_deed','partnership_deed','0','$added_date') ");
            
            $pan_document = '';
            if($_FILES['pan_document']){
                $file = $_FILES['pan_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_pan_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $pan_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$pan_document','pan_document','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

            $partner_proof = '';
            if($_FILES['partner_proof']){
                $file = $_FILES['partner_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_partner_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $partner_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$partner_proof','partner_proof','0','$added_date') ");

            $address_proof = '';
            if($_FILES['address_proof']){
                $file = $_FILES['address_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_proof','address_proof','0','$added_date') ");

            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

        }elseif($business_type=="One Person Company (OPC)"){
            $coi_opc = '';
            if($_FILES['coi_opc']){
                $file = $_FILES['coi_opc'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_coi_opc.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $coi_opc = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$coi_opc','coi_opc','0','$added_date') ");

            $director_proof = '';
            if($_FILES['director_proof']){
                $file = $_FILES['director_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_director_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $director_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$director_proof','director_proof','0','$added_date') ");

            $din = '';
            if($_FILES['din']){
                $file = $_FILES['din'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_din.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $din = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$din','din','0','$added_date') ");
            
            $pan_no = '';
            if($_FILES['pan_no']){
                $file = $_FILES['pan_no'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_pan_no.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $pan_no = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$pan_no','pan_no','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");
             
            $moa_aoa = '';
            if($_FILES['moa_aoa']){
                $file = $_FILES['moa_aoa'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_moa_aoa.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $moa_aoa = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$moa_aoa','moa_aoa','0','$added_date') ");

        }elseif($business_type=="Limited Liability Partnership (LLP)"){
            $coi_llp = '';
            if($_FILES['coi_llp']){
                $file = $_FILES['coi_llp'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_coi_llp.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $coi_llp = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$coi_llp','coi_llp','0','$added_date') ");

            $pan_llp = '';
            if($_FILES['pan_llp']){
                $file = $_FILES['pan_llp'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_pan_llp.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $pan_llp = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$pan_llp','pan_llp','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

            $llp_agreement = '';
            if($_FILES['llp_agreement']){
                $file = $_FILES['llp_agreement'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_llp_agreement.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $llp_agreement = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$llp_agreement','llp_agreement','0','$added_date') ");

            $partner_proof = '';
            if($_FILES['partner_proof']){
                $file = $_FILES['partner_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_partner_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $partner_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$partner_proof','partner_proof','0','$added_date') ");

            $address_proof = '';
            if($_FILES['address_proof']){
                $file = $_FILES['address_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_proof','address_proof','0','$added_date') ");

            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

        }elseif($business_type=="Private Limited Company (PVT. LTD.)"){
            $coi_llp = '';
            if($_FILES['coi_llp']){
                $file = $_FILES['coi_llp'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_coi_llp.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $coi_llp = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$coi_llp','coi_llp','0','$added_date') ");

            $pan_company = '';
            if($_FILES['pan_company']){
                $file = $_FILES['pan_company'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_pan_company.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $pan_company = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$pan_company','pan_company','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

            $moa_aoa = '';
            if($_FILES['moa_aoa']){
                $file = $_FILES['moa_aoa'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_moa_aoa.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $moa_aoa = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$moa_aoa','moa_aoa','0','$added_date') ");

            $partner_proof = '';
            if($_FILES['partner_proof']){
                $file = $_FILES['partner_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_partner_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $partner_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$partner_proof','partner_proof','0','$added_date') ");

            $address_proof = '';
            if($_FILES['address_proof']){
                $file = $_FILES['address_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_proof','address_proof','0','$added_date') ");
            
            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

        }elseif($business_type=="Public Limited Company (LTD.)"){
            $coi_llp = '';
            if($_FILES['coi_llp']){
                $file = $_FILES['coi_llp'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_coi_llp.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $coi_llp = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$coi_llp','coi_llp','0','$added_date') ");

            $pan_company = '';
            if($_FILES['pan_company']){
                $file = $_FILES['pan_company'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_pan_company.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $pan_company = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$pan_company','pan_company','0','$added_date') ");

            $gst_certificate = '';
            if($_FILES['gst_certificate']){
                $file = $_FILES['gst_certificate'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_gst_certificate.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $gst_certificate = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$gst_certificate','gst_certificate','0','$added_date') ");

            $moa_aoa = '';
            if($_FILES['moa_aoa']){
                $file = $_FILES['moa_aoa'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_moa_aoa.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $moa_aoa = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$moa_aoa','moa_aoa','0','$added_date') ");

            
            $partner_proof = '';
            if($_FILES['partner_proof']){
                $file = $_FILES['partner_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_partner_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $partner_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$partner_proof','partner_proof','0','$added_date') ");
            
            $address_proof = '';
            if($_FILES['address_proof']){
                $file = $_FILES['address_proof'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_address_proof.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $address_proof = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$address_proof','address_proof','0','$added_date') ");

            $board_resolution = '';
            if($_FILES['board_resolution']){
                $file = $_FILES['board_resolution'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_board_resolution.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $board_resolution = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$board_resolution','board_resolution','0','$added_date') ");
            
            $bank_document = '';
            if($_FILES['bank_document']){
                $file = $_FILES['bank_document'];
                $uploadDir = DOC_UPLOADPATH.'partner_docs/'.$partner_id."/";
                if (!is_dir($uploadDir)) {
                    // Try to create the folder
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir;
                $originalFileName = $file['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $fileuploadedpath = date("Ymdhis").'_bank_document.' . $fileExtension;
                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                if (move_uploaded_file($file['tmp_name'], $uploadFile.$fileuploadedpath)) {
                    $bank_document = $fileuploadedpath;
                }
            }
            $qry->execUpdateQuery(" INSERT INTO masters_partner_documents(partner_idfk,doc_name,doc_type,added_by,added_date)
                                    VALUES('$partner_id','$bank_document','bank_document','0','$added_date') ");

        }
        
        
        $qry->execUpdateQuery(" UPDATE masters_partners SET partner_uniqueid ='$partner_uniqueid' where id='$id'");
        $senddata = json_encode(array(
            "status" => "success",
            "message" => "Data submitted successfully",
            "data" =>array("request_id"=>$partner_uniqueid)
        ));

        $final_res = $senddata;
    break;
    case "uploadGstCertificate":
        $id = $_POST['id'];
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

        $final_res = $senddata;
    break;
    case "uploadResellerCertificate":
        $id = $_POST['id'];
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

        $final_res = $senddata;
    break;
    case "uploadAddressCertificate":
        $id = $_POST['id'];
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

        $final_res = $senddata;
    break;
    case "savePartnerDetails":
        
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
    
        //$qry->execUpdateQuery("  ");

        $senddata = json_encode(array(
            "status" => "success",
            "message" => "Data saved successfully",
            "data" =>array()
        ));

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
