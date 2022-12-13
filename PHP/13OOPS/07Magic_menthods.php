<?php

class MainClass{
    // public $data = "Something";
    public function __get($d){
        echo $d;
    }
    public function __set($varname,$varval){
        echo "variable name : ".$varname, "<br>variable value : ".$varval;
    }
    public function __call($functionname,$arg){
        echo "<br>".$functionname ," * FROM ",$arg[0] ;
    }
    public function __construct() {
        ECHO "<br>__construct calling<br>";
    }
    public function __destruct(){
        ECHO "<br> __destruct calling<br>";
        
    }
}   

$MainClassObject = new MainClass;
// $Aap->fekamfeki();
echo $MainClassObject->data;
echo "<br>";
echo $MainClassObject->koibhi;
echo "<br>";
echo $MainClassObject->koibhivariable = "variable data";
echo $MainClassObject->select("users");
echo $MainClassObject->select("cities");

// echo "<br> protected DM OutSide".$Aap->kejri;

// class congress{
//     public function Timepass(){
        
//     }
// }
?>