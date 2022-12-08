<?php

// UDF (user definded funtion)
// function shadi(){
//     $mahendi = "mahendi plan 2hrs";
//     $haldi = "haldi plan 2hrs";
//     $garba = "night plan 5hrs";
//     $food = "food 2hrs";
//     $dj = "DJ 1hrs";
//     $wedding = "wedding ";
// }

// UDF with arg 
// function declatration time parameter for recieving the value for making function dynamic 
function shadi($wedding,$food,$dj="",$garba="",$mahendi="",$haldi=""){

    echo $wedding,$food,$dj,$garba,$mahendi,$haldi;
    // $mahendi = "mahendi plan ";
    // $haldi = "haldi plan 5 with dj";
    // $garba = "night plan";
    // $food = "food";
    // $dj = "DJ";
    // $wedding = "wedding";
}


// function calling we pass the value that whould be considered as argument  
shadi("wedding day","food list","dj with new sngs","garba lates DJ","mahendi with props","haldi with holi");
echo "<br>";
shadi("wedding day","food list","dj with new sngs");
echo "<br>";

function addition($a,$b){
    // $a = 50;
    // $b = 80;
    return $a+$b;
}
echo "<br>";
echo addition(40,90);
echo "<br>";
echo addition(80,80);
echo "<br>";
echo addition(90,87);
echo "<br>";
echo addition(654,121);
echo "<br>";
echo addition(487987,9987987);
?>