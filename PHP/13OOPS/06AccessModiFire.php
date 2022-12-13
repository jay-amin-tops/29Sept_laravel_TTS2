<?php

class Modi{
    public $Amit = "Amit bJP";
    protected $Kejri = "Kejri";
    private $oveshi = "oveshi";
    public function Hardik(){
        echo "Public DM Modi ".$this->Amit;
        echo "<br>";
        echo "protected DM Modi ".$this->Kejri;
        echo "<br>";
        echo "Private DM Modi ".$this->oveshi;
        echo "<br>";
    }
}   
class Aap extends Modi{
    public function fekamfeki(){
        echo $this->Amit;
        echo "<br>";
        echo $this->Kejri;
        echo "<br>";
        echo $this->oveshi;
    }
}

$Aap = new Aap;
// $Aap->fekamfeki();
$Aap->Hardik();
echo "<br> Public DM OutSide".$Aap->Amit;
// echo "<br> protected DM OutSide".$Aap->kejri;

// class congress{
//     public function Timepass(){
        
//     }
// }
?>