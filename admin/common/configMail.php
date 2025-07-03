<?php

define("MHOST", "sangsoft.in");
define("MUSERNAME", "spiffdemo@sangsoft.in");
define("MPASSWORD", "xxx");   // "spiffdemo@12345");
define("PORT", "587");
define("SMTPSECURE", "non-ssl");
define("FROM", "spiffdemo@sangsoft.in");
 
 define("FROM_NAME", "FROM NAME");
 // define("CC","satish@sangsoft.in");
 define("BCC","satish@sangsoft.in");

// MAIL_ENV will be empty "" on live server,on other env this will be small string
// appended to the subject at the end. We will set it as " [uat]" on UAT env.
define("MAIL_ENV",' [dev-sb]'); 

// If ADDRESS_TO_ALWAYS is not blank all TO and CC addresses will be ignored 
// and mail will be sent to ADDRESS_TO_ALWAYS email address. 
// A list of TO and cc addresses will be appended at the end of mail body 
// for verification of the emails
define("ADDRESS_TO_ALWAYS","shankar@sangsoft.in"); // for LIVE make it ""
 
 
?>

