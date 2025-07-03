<?php

class DBQuery {

    public $objDBConnect;
    public $lastInsertTranNo;

    public function __construct($objDBConnect) {
        $this->objDBConnect = $objDBConnect->DBConnect;  // instance of mysqli
        $this->log = new ssloger();
        $this->doDebug = DEBUG_LEVEL;  // 0 = Do not Log    1=Log queries
    }

    public function manageTransaction($SetRollbackCommit) {
        switch ($SetRollbackCommit) {
            case 0:
                $this->objDBConnect->autocommit(FALSE);
                break;

            case -1:
                $this->objDBConnect->rollback();
                $this->objDBConnect->autocommit(TRUE);
                break;

            case 1:
                $this->objDBConnect->commit();
                $this->objDBConnect->autocommit(TRUE);
                break;

            default:
                die("Invalid Parameter:" . $SetRollbackCommit . " To manageTransaction. Should be 0:AutoCommit(False), 1:Rollback, 2:Commit");
                break;
        }
    }

    public function execUpdateQuery($updateQuery) {
// Execute generic INSERT/DELETE/UPDATE Query (in $query) on Backend. On Success Return "", Error Message otherwise. Calling program can check for Failure by if ($returnVal)
        $st = date('Y-m-d H:i:s:ms');
        $this->objDBConnect->multi_query($updateQuery);
        $et = date('Y-m-d H:i:s');
        $err = $this->objDBConnect->error;
        // This shows the actual query sent to MySQL, and the error. Useful for debugging.
        if ($err) {
            $errMsg = 'error';
        } else {
            $errMsg = 'success';
        }
        $this->log->lwrite("Query~$updateQuery~$st~$et~$errMsg");
        //
        //
        $msg = 'Please contact your system Administrator.';
        if ($err) {
            $message = "Invalid Query (at Update): " . $msg . "\n";
            if ($this->doDebug) {
                $message .= "Query Text: " . $updateQuery;
            }
            die($message);
        }
        do {
            $result = $this->objDBConnect->store_result();
            if (is_object(($result))) {
                $result->free();
            }
        } while ($this->objDBConnect->more_results() && $this->objDBConnect->next_result());
        return "";
    }

    public function execSelectQuery($execQuery, $resultType = 0, &$preResults = NULL) {
// Execute generic SELECT  Query (in $query) for fetching records FROM Backend & return the Rows-ColumnValues in 
// $resultType 0:Associative Array (Default), 1:Numeric Array, 2:Both ie Assosiative & Numeric
        $st = date('Y-m-d H:i:s:ms');
        $this->objDBConnect->multi_query($execQuery);
        $et = date('Y-m-d H:i:s');
        $err = $this->objDBConnect->error;
        $msg = 'Please contact your system Administrator.';
        // This shows the actual query sent to MySQL, and the error. Useful for debugging.
        if ($err) {
            $errMsg = 'error';
        } else {
            $errMsg = 'success';
        }
        $this->log->lwrite("Query~$execQuery~$st~$et~$errMsg");
        // This shows the actual query sent to MySQL, and the error. Useful for debugging.
        if ($err) {
            $message = "Invalid Query (at Fetching): " . $msg . "\n";
            if ($this->doDebug) {
                $message .= "Query Text: " . $execQuery;
            }
            die($message);
        }
        $resultType = (($resultType == 1) ? MYSQLI_NUM : (($resultType == 2) ? MYSQLI_BOTH : MYSQLI_ASSOC));
        $resultNo = 0;
        $dataArray = array();
        do {
            $result = $this->objDBConnect->store_result();
            if (is_object(($result))) {
                $dataArray = array();
//				while ($row = $result->fetch_assoc()) {
                while ($row = $result->fetch_array($resultType)) {
                    // $row1 = $this->replaceQuotes($row);
                    $dataArray[] = $row;
                };
                $result->free();
                $preResults[$resultNo] = $dataArray;
                $resultNo += 1;
            }
        } while ($this->objDBConnect->more_results() && $this->objDBConnect->next_result());
        return $dataArray;
    }
   
//    public function replaceQuotes($fields) {
//        $this->log->lwrite(sizeof($fields));
//        $rw = [];
//        foreach($fields as $field => $value){
//            // $this->log->lwrite($field. "   ". $value);
//            $rw[$field] = str_replace('"','"', $value);
//            $this->log->lwrite($field. "   ". $value. " == ". $rw[$field]);
//        }
//        return $rw;
//        
//    }
    function maxId($fieldName, $tableName) 
    {
        $maxIdValue = '';
        $sqlCmd = "select ifnull(max($fieldName),0)+1 as maxId from $tableName";
        if ($result = $this->execSelectQuery($sqlCmd)) {
            $maxIdValue = $result[0]['maxId'];
        }
        return $maxIdValue;
    }
    function LastInsertedId($fieldName, $tableName) 
    {
        $lastInsertedId = '';
        $sqlCmd = "select ifnull(max($fieldName),0) as lastInsertedId from $tableName";
        if ($result = $this->execSelectQuery($sqlCmd)) {
            $lastInsertedId = $result[0]['lastInsertedId'];
        }
        return $lastInsertedId;
    }

}
?>
