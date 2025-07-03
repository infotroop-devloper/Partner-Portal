<?php
require_once '../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
function validate($token) {
	try {
		return JWT::decode($token, new Key("This is my secret key", 'HS256'));
	} catch (Exception $e) {
		return null;  // Return null if token is invalid or expired
	}
}
function decode($token) {
	try {
		$bearerToken = explode(' ', $token);
		$token = $bearerToken[1]; 
		return JWT::decode($token, new Key("This is my secret key", 'HS256'));
	} catch (Exception $e) {
		return null;  // Return null if token is invalid or expired
	}
}
function validate_key($session,$post,$apikey = ''){
	$authorizationHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? null; // Check if it's available
	if ($authorizationHeader) {
		$bearerToken = explode(' ', $authorizationHeader);
		if (count($bearerToken) === 2 && $bearerToken[0] === 'Bearer') {
			$token = $bearerToken[1]; 
			$validtokendata = validate($token);
			
			if($validtokendata->data){
				return true;
			}else{
				return false;
			}
		} else {
			return false;
		}
	} else {
		return false;
	}
	// echo "<pre>";print_r($session);
	// echo "<pre>";print_r($post);
	// echo "<pre>";print_r($apikey);die;
	
	
}


?>
