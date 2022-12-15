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
?>


<ul>
    <li>HTML => 4/5</li>
    <li>CSS => 3/5</li>
    <li>Mysqli => 4/5</li>
    <li>JavaScript => 2/5</li>
    <li>Core PHP and OOPS => 4/5</li>
    <li>Laravel => not worked</li>
</ul>