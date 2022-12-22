<?php

use myClass as GlobalMyClass;

class myClass{
    // public function somemethod(otherclass $otherClassObj,otherclass1 $otherClass1){   
    // public function somemethod(int $otherClassObj){   
    //     echo "test $otherClassObj";   
    //     // echo $otherClass1->FunctionName1();
    // }
    public function somemethod(ChildFun $ChildFun){   
        echo "test parent";   
        $ChildFun->childfun();
        // echo $otherClass1->FunctionName1();
    }
}
class ChildFun{
    public function childfun(){   
        echo "<br>test child";
        // echo $otherClass1->FunctionName1();
    }
}
$myClass = new myClass;
$ChildFun = new ChildFun;
// $myClass->somemethod("a");
$myClass->somemethod($ChildFun);

?>