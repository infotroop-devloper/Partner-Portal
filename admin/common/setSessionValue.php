<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();

$sessionVarName = $_REQUEST["psessionVarName"];
$sessionVarValue = $_REQUEST["psessionVarValue"];
$sessionVarType = strtolower($_REQUEST["psessionVarType"]);



//  -------------------
//$sessionVarName = $_SESSION['psessionVarName'];
//$sessionVarValue = $_SESSION['psessionVarValue'];
//$sessionVarType = strtolower($_SESSION['psessionVarType']);

switch ($sessionVarType) {
	case "string":
		$str = $sessionVarValue;
		$_SESSION[$sessionVarName] = $sessionVarValue;
		//session . setAttribute($sessionVarName, $str);
		break;
	case "integer":
		$vint = intval($sessionVarValue);
		$_SESSION[$sessionVarName] = $sessionVarValue;
		break;
	case "date":
		$vdt = date_create($sessionVarValue);
		$_SESSION[$sessionVarName] = $sessionVarValue;
		break;
	case "float":
		$vflt = floatval($sessionVarValue);
		$_SESSION[$sessionVarName] = $sessionVarValue;
		break;
	default :
		$_SESSION[$sessionVarName] = $sessionVarValue;
		break;
};
?>