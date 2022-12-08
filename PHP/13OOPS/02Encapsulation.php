<?php

class MathOp{
    function addition($a,$b){
        // $a = 50;
        // $b = 80;
        return $a+$b;
    }
}
$MathOp = new MathOp;
// function addition($a,$b,$c){
//     // $a = 50;
//     // $b = 80;
//     return $a+$b;
// }
echo "<br>";
echo $MathOp->addition(40,90);
echo "<br>";
echo $MathOp->addition(80,80);
echo "<br>";
echo addition(90,87);
echo "<br>";
echo addition(654,121);
echo "<br>";
echo addition(487987,9987987);
?>