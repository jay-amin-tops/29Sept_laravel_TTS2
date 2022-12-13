<?php

use MainClass as GlobalMainClass;

class MainClass
{
    public static $data = "Something";
    public function __get($d)
    {
        echo $d;
    }
    public static function FunctionName(){
        echo self::$data; 
        echo "<br>Parent FunctionName";
    }
//     public static function average()
//     {
//         $this->adition();
//         echo "Parent FunctionName";
//     }
}
class ChilClass extends GlobalMainClass{
    // public $data = "Something";
    public static function FunctionNameChild(){
        // $this->FunctionName();
        parent::FunctionName();
        echo "<br>Child FunctionNameChild<br>";
    }
}

// $MainClassObject = new ChilClass;
// $MainClassObject->FunctionNameChild();
// MainClass::FunctionName();
echo "<br>";
// echo MainClass::$data;
echo ChilClass::FunctionNameChild();
