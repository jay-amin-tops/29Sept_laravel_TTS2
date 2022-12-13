<?php

class Mrg{
    public $BoysGroup = "Boys";
    function Mahendi(){
        echo "Mahendi Function".$this->BoysGroup;
    }
    public function Haldi(){
        
    }
    public function Garba(){
        
    }
    public function Food(){
        
    }
}

$BoysMrg = new Mrg("Boys");
$GrlsMrg = new Mrg("Grls");
$BoysMrg->Mahendi();

?>

<p>datamember is a variable which is use for entire class</p>