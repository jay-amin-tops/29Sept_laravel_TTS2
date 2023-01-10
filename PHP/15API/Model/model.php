<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

class Model{
    public $connection = "";
    public function __construct() {
        // echo "called Model";
        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase");
            // echo "called try";
        } catch (Exception $e) {
            // echo "called catch";
            // echo "<pre>";
            // print_r($e->getMessage());
            // echo "</pre>";
            $ErrorMsg = PHP_EOL."Error Msg        >> ".$e->getMessage();
            $ErrorMsg .= PHP_EOL."Error Date Time  >> ".date("d-m-Y H:i:s A").PHP_EOL;
            echo "<h2>$ErrorMsg</h2>";
            if (!file_exists("log")) {
                mkdir("log");
            }
            $FileName = date("d_m_y");
            file_put_contents("log/".$FileName."log.txt",$ErrorMsg,FILE_APPEND);
        }
        // echo "<pre>";
        // print_r($connection);
        // echo "</pre>";
    }

    public function login($uname,$pass){
        $SQL = "SELECT * FROM users WHERE password='$pass' AND (username='$uname' OR email='$uname' OR mobile='$uname') ";
        $SQLEx = $this->connection->query($SQL);

        if ($SQLEx->num_rows > 0) {
            // $SQLExFetch = $SQLEx->fetch_all(); //mulitple data with array formate
            // $SQLExFetch = $SQLEx->fetch_array(); //single data with numeric and associative array formate
            // $SQLExFetch = $SQLEx->fetch_assoc(); //single data with only associative array formate
            // $SQLExFetch = $SQLEx->fetch_column(); //1-0 res
            // $SQLExFetch = $SQLEx->fetch_field(); //database table record info
            // $SQLExFetch = $SQLEx->fetch_fields();//database table record info
            // $SQLExFetch = $SQLEx->fetch_row(); //single data with only numeric array formate
            // $SQLExFetch = $SQLEx->fetch_object();//returns an object
            while ($SQLExFetch = $SQLEx->fetch_object()) {
                $SqlFetchData[]=$SQLExFetch;
            }
            // echo "<pre>";
            // print_r($SQLEx);
            // echo "</pre>";
            // echo $SQL;
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']=$SqlFetchData;
        } else {    
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        
        return $ResponseData;
        
    }
    public function select($tbl){
        $SQL = "SELECT * FROM $tbl";
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($SQLExFetch = $SQLEx->fetch_object()) {
                $SqlFetchData[]=$SQLExFetch;
            }
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']=$SqlFetchData;
        } else {    
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        
        return $ResponseData;
        
    }
    public function insert($tbl,$data){
        // $SQL = "INSERT INTO users(username,password)VALUES('test','123')";
        // $SQL = "INSERT INTO city(city_title)VALUES('test')";
        $arrayKey = implode(",",array_keys($data));
        $arrayValues = implode("','",$data);
        // echo "<pre>";
        // print_r($data);
        // print_r($arrayKey);
        // echo "</pre>";

        // $SQLEx = $connection->query("INSERT INTO $tbl($arrayKey)VALUES('$arrayValues')");
        $SQL = "INSERT INTO $tbl($arrayKey)VALUES('$arrayValues')";
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']="1";
        }else{
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        return $ResponseData;
    }
    public function update(){}
    public function delete(){}
}

?>