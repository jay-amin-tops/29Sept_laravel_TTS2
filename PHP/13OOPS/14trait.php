<?php

// class A {}
// // class B {}
// class B extends A{}
// // class C extends A,B {} //wrong
// // class C extends A extends B {} //wrong
// // class C extends B {} //only without B extends A single
// // class C extends B {} //Multi level with B extends A
// class C extends A {} //Multi level with B extends A



trait CustomTrait{
    function simpleMethodCustomTrait(){
        return "something CustomTrait" ;
    }
}
trait CustomTrait12{
    function simpleMethodCustomTrait12(){
        return "something CustomTrait12";
    }
}
trait CustomTrait123{
    function simpleMethodCustomTrait123(){
        return "something CustomTrait123";
    }
}


class CustomClassFroTrait{
    use CustomTrait;
    use CustomTrait12;
    use CustomTrait123;
    // use CustomTrait123,CustomTrait,CustomTrait12;
    public function __construct() {
        echo "<br>";
        print_r($this->simpleMethodCustomTrait());
        echo "<br>";
        print_r($this->simpleMethodCustomTrait12());
        echo "<br>";
        print_r($this->simpleMethodCustomTrait123());
        echo "<br>";
    }
}

$CustomClassFroTrait = new CustomClassFroTrait;


?>