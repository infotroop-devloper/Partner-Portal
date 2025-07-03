<?php
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/                        


define("HOST", "localhost");     // The host you want to connect
define("USER", "root");  // The database username. 
define("PASSWORD", ""); // The database password. 
define("DATABASE", "infotroop");  //datbase name

define("LOGPATH", "c:/log/infotroop_customer_");  //Logfile path
define("THROW_ERR", "YES");  //Logfile path

define("HOSTENV", "dev"); // or "demo" or "live"
define("DEBUG_LEVEL",1);   // 1 = LOG     0 = DO NOT LOG
// criticalError= 1, serverError= 2, debugMsg= 3, infoDeveloper= 4, infoUser= 5

define('BASE_URL','http://localhost/customer/');
define("ALERT_LEVEL",1);
define("LOG_LEVEL",5);
define("ERROR_LEVEL",E_ERROR);
define("ROOT", "http://localhost/customer/");

define("URL_PATH", "http://localhost/customer/upload/");
define("UPLOADPATH", "C:/xampp/htdocs/customer/upload/"); 

define("DOC_URL_PATH", "http://localhost/customer/upload/");
define("DOC_UPLOADPATH", "C:/xampp/htdocs/admin/upload/"); 

// define('BASE_URL','https://customer.infotroop.co.in/');
// define("ALERT_LEVEL",1);
// define("LOG_LEVEL",5);
// define("ERROR_LEVEL",E_ERROR);
// define("ROOT", "https://customer.infotroop.co.in/");

// define("URL_PATH", "https://customer.infotroop.co.in/upload/");
// define("UPLOADPATH", "C:/xampp/htdocs/customer/upload/"); 

// define("DOC_URL_PATH", "https://customer.infotroop.co.in/upload/");
// define("DOC_UPLOADPATH", "C:/xampp/htdocs/admin/upload/"); 


?>