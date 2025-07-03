<?php
// MySQl Connection Class. Sets public object DBConnect

class DBConnect {
	const SERVERNAME = HOST; 
	const USERNAME   = USER;
	const PASSWORD   = PASSWORD;
	public $DBConnect;
	public function __construct($dbName = DATABASE, $userName=NULL, $passWord=NULL) {
		$userName = (isset($userName)) ? $userName : self::USERNAME;
		$passWord = (isset($passWord)) ? $passWord : self::PASSWORD;
		$dbConnect = new mysqli(self::SERVERNAME, $userName, $passWord, $dbName);
		if ($dbConnect->connect_error) {
		    die("Connection Error. (" . $dbConnect->connect_errno . ") " . $dbConnect->connect_error);
		}
		$this->DBConnect = $dbConnect;
		$dbConnect->set_charset("utf8mb4");

	}

	public function DBClose() {
		$thread_id = $this->DBConnect->thread_id;
		$this->DBConnect->kill($thread_id);
		$this->DBConnect->close();
	}
}

/*
$charset = $dbConnect->character_set_name();
printf ("Current character set is %s\n", $charset);		*/


?>