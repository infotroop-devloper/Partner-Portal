<?php 
    //Document   : getSessionValue
    //Author     : Satish
//error_reporting(0);
session_start();
$sessionVarName = $_REQUEST["psessionVarName"];
$result = $_SESSION[$sessionVarName];
if(is_array($result))
{
	echo json_encode($result);
} else {
	echo $result;
}
