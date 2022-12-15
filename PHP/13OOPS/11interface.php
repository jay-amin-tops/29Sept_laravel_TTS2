<?php


interface TOPSInterface{
    function Project();
    function Assignment();
    function Attendance();
    // public function simpleMethods(){
    //     echo "simpleMethods in abstacted class";
    // }
}

class OtherStudentFromBatch{
    public function Something(){
        
    }
}
class Student extends OtherStudentFromBatch implements TOPSInterface{
    public function FunctionName(){
        echo "interface method";
    }
    public function Project(){
        echo "interface method";
    }
    public function Assignment(){
        echo "interface method";
    }
    public function Attendance(){
        echo "interface method";
    }
}
class Student2 implements TOPSInterface{
    public function FunctionName1(){
        echo "interface method";
    }
    public function Project(){
        echo "interface method";
    }
    public function Assignment(){
        echo "interface method";
    }
    public function Attendance(){
        echo "interface method";
    }
}

$aa = new Student;
$aa->FunctionName();
?>