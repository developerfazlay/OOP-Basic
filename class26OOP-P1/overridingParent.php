<?php

// overriding parent

class ParentClass{
   public $num1; 
   public $num2;
   
   function __construct($a, $b)
   {
    $this->num1 = $a; 
    $this->num2 = $b; 
   }

   function sum(){
      return "This is from Parent Class".($this->num1+$this->num2);
   }
   function mul($val1, $val2){
      return "This is from Parent Class :$val1*$val2 = ".($val1*$val2);
   }
}
 


