<?php


class FinalClassExample{
    final public function FunctionName()
    {
        echo "Called";
    }
}
class OtherClass extends FinalClassExample{ //Class OtherClass cannot extend final class FinalClassExample in
    // public function FunctionName() { //Cannot override final method
    //     echo "Called Child";
    // }
}

$FinalClassExample = new OtherClass;
$FinalClassExample->FunctionName();

?>