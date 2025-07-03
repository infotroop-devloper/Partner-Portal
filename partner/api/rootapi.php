<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
// header("X-Content-Type-Options: nosniff");  // Prevent MIME type sniffing
// header("X-Frame-Options: DENY");           // Prevent clickjacking
// header("X-XSS-Protection: 1; mode=block");

include_once '../config/config.php';
error_reporting(ERROR_LEVEL);

include_once '../common/class.dbConnect.php';
include_once '../common/class.dbQuery.php';
include_once '../common/JwtManager.php';
include_once '../common/auth_validator.php';
include_once '../common/ssloger.php';

$timeout = 5*60; //5 mins

@session_start();
$conn = new DBConnect();
$qry = new DBQuery($conn);

$pgNm = "rootapi.php";
$final_res = "";

try {
	
    $jsonInput = file_get_contents('php://input');
    $jsonObject = json_decode($jsonInput, true);
    $token =  $_SERVER['HTTP_AUTHORIZATION'];
	// $bypass = $_POST["bypass"];
	$r = validate_key($_SERVER,$_POST,$token);
    
	// to enable API validation uncomment two lines below
	$op = isset($_POST["op"])? $_POST["op"]: $jsonObject["op"];
	if($op!='login'){
		$op = $r ? $op :  'invalidSession';
	}
	//
    if($op == 'invalidSession'){
        $final_res = '{ "status":"error",
					"message":"Invalid Session",
					"Errorcode":"err100",
					"data":{}}';
    } else {
		$serviceName = isset($_POST["serviceName"])? $_POST["serviceName"]: $jsonObject["serviceName"];
        $pgNm = $serviceName;
        include_once $serviceName;
    }
} catch (Exception $ex) {
	$final_res = '{ "status":"error @ root",
                    "message":' . $ex.message . ',
                    "Errorcode":"err500",
                    "data":{}}';
} finally {
    session_destroy();
    $json = $final_res;
    $json = preg_replace('/\\\\\"/', "\"", $json);
    echo $json;

}
