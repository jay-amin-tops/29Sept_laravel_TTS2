<?php

use MainClass as GlobalMainClass;

class MainClass{
    public static $data = "Something";
    public function __get($d){
        echo $d;
    }
   public static function FunctionName(){
    echo "Parent FunctionName";
}
}   
// class ChilClass extends GlobalMainClass{
//     // public $data = "Something";
//     public function __get($d){
//         echo $d;
//     }
//     public function FunctionName(){
//        echo "Child FunctionName";
//    }
// }   

// $MainClassObject = new ChilClass;
// $MainClassObject->FunctionName();
MainClass::FunctionName();
echo "<br>";
echo MainClass::$data;