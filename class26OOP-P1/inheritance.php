<?php

// Practice Inheritence


class ParentBG {
    public $assets;
    public $screenColor;
    public $height;

    function __construct($a, $b, $c){
        $this-> assets      = $a;
        $this-> screenColor = $b;
        $this-> height = $c;
    }

   
    
    function parentInfo(){
        return 'The Parent Assets is: '.$this-> assets.'-'. $this-> screenColor.'-'. $this-> height;
    }
}

class ChildOwnBG extends ParentBG{
    public $job = "Hello";

    function cInfo($a){
       return $this->job =$a;
    }
    
    
}



$obj = new ChildOwnBG("Land", "White", "5.6");
echo $obj-> parentInfo();

echo "<br>";

// $childObj = new ChildOwnBG;

// echo $childObj -> childInfo();
echo "<br>";

// $childObj = new ChildOwnBG("Laravel Developer"); if we create __construct method within the child class

// echo $childObj->childInfo();

// echo $obj -> childInfo("Wordpress Developer");
echo $obj -> cInfo("Wordpress Developer");










