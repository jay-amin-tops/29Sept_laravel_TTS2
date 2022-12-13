<?php

class MathOp{
    function addition($a,$b){
        return $a+$b;
    }
}
class AdvanceMathOp extends MathOp{
    function averageOfTow($a,$b){
        return $a+$b;
    }
}
$MathOp = new MathOp;
echo "<br>";
echo $MathOp->addition(40,90);
echo "<br>";
echo $MathOp->addition(80,80);
echo "<br>";
// echo addition(90,87);
// echo "<br>";
// echo addition(654,121);
// echo "<br>";
// echo addition(487987,9987987);
?>