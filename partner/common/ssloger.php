<?php
/**
 * Logging class:
 * - contains lfile, lwrite and lclose public methods
 * - 
 * - lfile sets path and name of log file get created at 
 * - In case the lfile is not set, the file gets created 
 * - using path as LOGPATH + current yyyy-mm-dd.log
 * -
 * - lwrite writes message to the log file (and implicitly opens log file)
 * - lclose closes log file
 * - first call of lwrite method will open log file implicitly
 * - message is written with the following format: [d/M/Y:H:i:s] (script name) message
 */
class ssloger {
    // declare log file and file pointer as private properties
    private $log_file = "";
    private $fp;

    // set log file (path and name)
    public function lfile($path= "") {
        if($path==""){
            return $this->log_file ;
        } else {
            $this->log_file = $path;
            $this->lopen();
        }
    }

    // write message to the log file
    public function lwrite($message) {
			// if file pointer doesn't exist, then open log file
			$objType = gettype($message);
			$strObj = "";
			// $objType == 'object' || 
			if($objType == 'object' || $objType == 'array' ){
				foreach ($message as $key => $value) {
					$strObj.="$key => $value ,";
				}
			} else {
				$strObj = "$message";
			}
			
			if (!is_resource($this->fp)) {
				$this->lopen();
			}
			// define script name
			$script_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME). "-". $pgNm;
			// define current time and suppress E_WARNING if using the system TZ settings
			// (don't forget to set the INI setting date.timezone)
			$time = @date('[d/M/Y:H:i:s]');
			// write current time, script name and message to the log file
			fwrite($this->fp, "$time ($script_name) $strObj" . PHP_EOL);
    }

    // close log file (it's always a good idea to close a file when you're done with it)
    public function lclose() {
        fclose($this->fp);
    }

    // open log file (private method)
    private function lopen() {
        // define log file from lfile method or use previously set default
				// per_day = one file per day, per_hour = 1 file per hour
	if(!defined('LOGDURATION')) define('LOGDURATION','per_day');
				//
        $tsFormat = LOGDURATION =='per_hour' ? 'Ymd-H' : 'Ymd'; // if not hour assumed as per_day
        $lfile = $this->log_file!="" ? $this->log_file : LOGPATH. date($tsFormat, time()) .".log";
        // open log file for writing only and place file pointer at the end of the file
        // (if the file does not exist, try to create it)
        $this->fp = fopen($lfile, 'a') or exit("Can't open $lfile!");
        $this->log_file = $lfile; 
    }

/* 		public function lwriteObject($obj){
			$objType = gettype($obj);
			if($objType !== 'object' && $objType !== 'array'){
				$this->lwrite("Invalid object type: ". $objType);
			}
			$strObj = "";
			foreach ($obj as $key => $value) {
				$strObj.="$key => $value\n";
			}
			$this->lwrite($strObj);
		}
 */		
	 
}

?>