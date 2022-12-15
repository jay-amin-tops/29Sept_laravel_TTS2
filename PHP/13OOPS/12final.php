<?php


final class FinalClassExample{
    public function FunctionName()
    {
        echo "Called";
    }
}
// class OtherClass extends FinalClassExample{ //Class OtherClass cannot extend final class FinalClassExample in
//     public function FunctionName()
//     {
//         echo "Called";
//     }
// }

$FinalClassExample = new FinalClassExample;
$FinalClassExample->FunctionName();

?>