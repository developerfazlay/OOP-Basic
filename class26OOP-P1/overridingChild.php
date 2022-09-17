<?php

// overriding child

include "./overridingParent.php";

class ChildClass extends ParentClass{

    // function __construct($p, $q, $r)
    // {
    //     $this->num1 = $p;
    //     $this->num2 = $q;
    //     $this->num3 = $r;
        
    // }
    
    function sum(){
        return "This is from Child Class".($this->num1+$this->num2);
    }
    // function overriding between Paren and Child


    // function mul($val1, $val2, $val3){
    //     return "This is from Parent Class :$val1*$val2*$val3 = ".($val1*$val2*$val3);
    // }
     // function overloading not possible between Parent and Child in PHP
}

$obj = new ChildClass(15,15);
echo $obj->sum();
echo "<br>";
echo $obj->mul(5,12);

