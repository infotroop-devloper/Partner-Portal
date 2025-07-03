<?php
require 'app_config.php';

function db_con($env = "Default") {
	switch ($env) {
		case "Default":
			//echo "in default";
			$host = HOST;	   // The host you want to connect to.
			$user = USER;	  // The database username. 
			$password = PASSWORD;   // The database password. 
			$database = DATABASE;
			break;
		case "Dev_DB":
			$host = HOST;	   // The host you want to connect to.
			$user = USER;	  // The database username. 
			$password = PASSWORD;   // The database password. 
			$database = DATABASE;
			break;

	} //end switch

	$con1 = mysqli_connect($host, $user, $password, $database);

	if (!$con1) {
		$con = "";
		return "Error " . mysqli_connect_error();
	} else {
		$con = $con1;
		//return "Success";
		return $con;
	} //endif
}


