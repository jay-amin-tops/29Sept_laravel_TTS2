<?php

class Mrg{
    public $MrgGroup = "Boy Name";
    public function __construct($group) {
        // echo "Called";
        $this->MrgGroup = $group;
        // $MrgOfBoy = "Boy Name";
    }
    public function Mahendi(){
        echo "Mahendi Function ".$this->MrgGroup;
    }
    public function Haldi(){
        
    }
    public function Garba(){
        
    }
    public function Food(){
        
    }
}

$BoysMrg = new Mrg("Boys");
// $GrlsMrg = new Mrg("Grls");
$BoysMrg->Mahendi();
$GrlsMrg = new Mrg("Girls");
echo "<br>";
$GrlsMrg->Mahendi();

?>

<p>constructor is a method wich is invoked by default when objects are created</p>
<p>constructor never return</p>
<p>constructor use for init some values</p>