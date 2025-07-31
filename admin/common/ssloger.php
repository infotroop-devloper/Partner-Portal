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
    private $log_file = "";
    private $fp;

    public function lfile($path = "") {
        if ($path == "") {
            return $this->log_file;
        } else {
            $this->log_file = $path;
            $this->lopen();
        }
    }

    public function lwrite($message) {
        $objType = gettype($message);
        $strObj = "";
        
        if ($objType == 'object' || $objType == 'array') {
            $strObj = print_r($message, true); // Better array/object formatting
        } else {
            $strObj = "$message";
        }
        
        if (!is_resource($this->fp)) {
            $this->lopen();
        }
        
        // Get script name safely
        $script_name = isset($_SERVER['PHP_SELF']) ? 
            pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) : 'unknown';
        
        // Add global variable if defined
        $pgNm = isset($GLOBALS['pgNm']) ? $GLOBALS['pgNm'] : '';
        $script_name .= $pgNm ? "-$pgNm" : '';
        
        $time = date('[d/M/Y:H:i:s]');
        fwrite($this->fp, "$time ($script_name) $strObj" . PHP_EOL);
    }

    public function lclose() {
        if (is_resource($this->fp)) {
            fclose($this->fp);
        }
    }

    private function lopen() {
        if (!defined('LOGDURATION')) define('LOGDURATION', 'per_day');
        if (!defined('LOGPATH')) define('LOGPATH', '../logs/');
        
        // Ensure log directory exists
        if (!is_dir(LOGPATH)) {
            mkdir(LOGPATH, 0755, true);
        }
        
        $tsFormat = LOGDURATION == 'per_hour' ? 'Ymd-H' : 'Ymd';
        $lfile = $this->log_file != "" ? $this->log_file : LOGPATH . date($tsFormat, time()) . ".log";
        
        $this->fp = fopen($lfile, 'a') or exit("Can't open $lfile!");
        $this->log_file = $lfile;
    }
}

?>