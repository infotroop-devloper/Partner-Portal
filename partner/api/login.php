<?php

// die("flash ". $op);
switch ($op) {
    case 'invalidSession':
		$final_res = '{ "status":"error",
			"message":"Invalid Session",
			"Errorcode":"err100",
			"data":{}}';
	break;
	case "confirmPassword":
		$newpassword = $_POST["newpassword"];
        $password = $_POST["password"];
		$email = $_POST["email"];
		if($email != '' & $password != '' && $newpassword != '' && $newpassword==$password){
			$getusers = $qry->execSelectQuery(" SELECT uid,firstname,email,user_type,pwd,temp_pwd FROM masters_users where email='$email' limit 1 ");
			if(sizeof($getusers)>0){
				//update new password and send success request and land user to dashboard page.
				$uid = $getusers[0]['uid'];
				$md5newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
				$qry->execUpdateQuery(" UPDATE masters_users SET pwd='$md5newpassword',temp_pwd='' WHERE `uid`='$uid' ");
				$_SESSION['uid'] = $getusers[0]['uid'];
				$_SESSION['firstname'] = $getusers[0]['firstname'];
				$_SESSION['email'] = $getusers[0]['email'];
				$_SESSION['user_type'] = $getusers[0]['user_type'];
				
				unset($_COOKIE['uid']);
				unset($_COOKIE['firstname']);
				unset($_COOKIE['email']);
				unset($_COOKIE['user_type']);
				$fname = $getusers[0]['firstname']!='' ? $getusers[0]['firstname'] : ' ';
				setcookie('uid', $getusers[0]['uid'], time() + (86400 * 30), "/"); 
				setcookie('firstname', $fname, time() + (86400 * 30), "/"); 
				setcookie('email', $getusers[0]['email'], time() + (86400 * 30), "/"); 
				setcookie('user_type', $getusers[0]['user_type'], time() + (86400 * 30), "/"); 
				
				$token = JwtManager::generate([	
					'uid' => $getusers[0]['uid'],
					'firstname' => $fname,
					'email' => $getusers[0]['email'],
					'user_type' => $getusers[0]['user_type']
				
				]);
				$senddata = array(
					'uid'=>$getusers[0]['uid'],
					'firstname'=>$fname,
					'email'=>$getusers[0]['email'],
					'user_type'=>$getusers[0]['user_type']
				);
				$_SESSION['userdata'] = $senddata;
				
				$senddata = json_encode(array(
					"status" => "success",
					"msg" => "Identity Found",
					"data" =>array("userdata"=>$senddata,"token"=>$token)
				));
			}else{
				$senddata = json_encode(array(
					"status" => "error",
					"msg" => "Bad Request"
				));
			}
		}else{
			$senddata = json_encode(array(
				"status" => "error",
				"msg" => "Bad Request"
			));
		}
        
        $final_res = $senddata;
	break;
    case "login":
	
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email != '' & $password != ''){
			
            $getusers = $qry->execSelectQuery(" SELECT uid,firstname,email,user_type,pwd,temp_pwd FROM masters_users where email='$email' and user_type in (3,4) limit 1 ");
			
			if(sizeof($getusers)>0){
				$pwd = $getusers[0]['pwd'];
				$temp_pwd = $getusers[0]['temp_pwd'];
				
				// CHECK TEMP PASSWORD
				if($temp_pwd!=''){
					$senddata = array(
						'email'=>$getusers[0]['email'],
						'new_pwd'=>1
					);					
					$senddata = json_encode(array(
						"status" => "success",
						"msg" => "Identity Found",
						"data" =>array("userdata"=>$senddata)
					));
				}else if (password_verify($password, $pwd)) {
					// create session data and token
					$_SESSION['uid'] = $getusers[0]['uid'];
					$_SESSION['firstname'] = $getusers[0]['firstname'];
					$_SESSION['email'] = $getusers[0]['email'];
					$_SESSION['user_type'] = $getusers[0]['user_type'];
					
					unset($_COOKIE['uid']);
					unset($_COOKIE['firstname']);
					unset($_COOKIE['email']);
					unset($_COOKIE['user_type']);
					
					setcookie('uid', $getusers[0]['uid'], time() + (86400 * 30), "/"); 
					setcookie('firstname', $getusers[0]['firstname'], time() + (86400 * 30), "/"); 
					setcookie('email', $getusers[0]['email'], time() + (86400 * 30), "/"); 
					setcookie('user_type', $getusers[0]['user_type'], time() + (86400 * 30), "/"); 
					sleep(3);

					$token = JwtManager::generate([	
						'uid' => $getusers[0]['uid'],
						'firstname' => $getusers[0]['firstname'],
						'email' => $getusers[0]['email'],
						'user_type' => $getusers[0]['user_type']
					
					]);
					$senddata = array(
						'uid'=>$getusers[0]['uid'],
						'firstname'=>$getusers[0]['firstname'],
						'email'=>$getusers[0]['email'],
						'user_type'=>$getusers[0]['user_type']
					);
					$_SESSION['userdata'] = $senddata;
					
					$senddata = json_encode(array(
						"status" => "success",
						"msg" => "Identity Found",
						"data" =>array("userdata"=>$senddata,"token"=>$token)
					));
				} else {
					$senddata = json_encode(array(
						"status" => "error",
						"msg" => "Email-id OR Password Incorrect"
					));
				}
				
			}else{
				$senddata = json_encode(array(
				"status" => "error",
				"msg" => "Email-id OR Password Not Matched"
				));
			}
			
        }else{
			$senddata = json_encode(array(
				"status" => "error",
				"msg" => "Email-id And Password Required"
				));
		}
        
        $final_res = $senddata;
	break;
	case 'logout':
		$tokendata = decode($_SERVER['HTTP_AUTHORIZATION']);
		if($tokendata->data){
			foreach ($_COOKIE as $key => $value) {
				setcookie($key, '', time() - 3600, '/'); // Set the cookie with an expired time
			}
			$_SESSION = []; // Clear all session variables

			// If the session is being propagated via a cookie
			if (ini_get("session.use_cookies")) {
				$params = session_get_cookie_params();
				setcookie(session_name(), '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
			}

			session_destroy();
		}
		$senddata = json_encode(array(
					"status" => "success",
					"msg" => "Identity Logout Successfully"
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
