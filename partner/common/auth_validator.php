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
		$referer_url = isset($session['HTTP_REFERER'])? $session['HTTP_REFERER'] : "http://undefined/undefined.php";
		$referer = parse_url($referer_url);
		$client = isset($referer['host']) ? $referer['host'] : "undefined.com";
		$key = $apikey != ''? $apikey : $post['clid'];
		$client_key = get_client_key_it($client);
		if ($client_key  != $key){
			return false;
		} else {
			return true;
		}
		return false;
	}
}

function get_client_key_it($client){
	switch ($client){
		case 'localhost':
			return md5("infotroop-partneronboarding-clid");
		break;
		case 'partner.infotroop.co.in':
			return md5("infotroop-partneronboarding-clid");
		break;
		case 'admin.infotroop.co.in':
			return md5("infotroop-partneronboarding-clid");
		break;
		case 'customer.infotroop.co.in':
			return md5("infotroop-partneronboarding-clid");
		break;
		default:
			return "undefined_key";
	}
}


?>
