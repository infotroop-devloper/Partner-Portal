<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
    case "fetchFaq":
	
        $tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
        
        if($tokendata->data->uid){
            $uid = $tokendata->data->uid;
            $email = $tokendata->data->email;
            $user_type = $tokendata->data->user_type;

            $getFaqs = $qry->execSelectQuery(" SELECT* FROM masters_faqs_info where is_active=1 ");
            $send_data = array();
            $i = 0;
            foreach($getFaqs as $row){
                $send_data[$i]['id'] = $row['id'];
                $send_data[$i]['faq_question'] = $row['faq_question'];
                $send_data[$i]['faq_answer'] = $row['faq_answer'];
                $send_data[$i]['faq_description'] = $row['faq_description'];
                $send_data[$i]['faq_video_link'] = $row['faq_video_link'];
                $send_data[$i]['faq_type'] = $row['faq_type'];
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
