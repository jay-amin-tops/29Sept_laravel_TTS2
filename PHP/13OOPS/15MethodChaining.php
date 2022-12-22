<?php

class CustomQuery{
    public $SQL ="";
    public function select($clm){
        $this->SQL .= "SELECT $clm ";
        return $this;
    }
    public function from($tbl){
        $this->SQL .= " FROM  $tbl ";
        return $this;
        // return $SQL;
    }
    public function where($whr){
        $this->SQL .= " WHERE $whr ";
        return $this;
        // return $SQL;
    }
}

$CustomQuery = new CustomQuery;

// echo $CustomQuery->select("*");
// echo $CustomQuery->from("users");
// echo $CustomQuery->select("*")->SQL;
// echo $CustomQuery->select("*")->from("users")->SQL;
echo $CustomQuery->select("*")->from("users")->where("userid=1")->SQL;
// print_r($data);
?>