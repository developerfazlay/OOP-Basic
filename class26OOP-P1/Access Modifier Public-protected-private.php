<?php

// Practice Inheritence


class ParentBG {
    public $assets;
    private $screenColor = "Black";
    protected $height;
    
    function __construct($a, $b, $c){
        $this-> assets      = $a;
        $this-> screenColor = $b;
        $this-> height = $c;
    }

    protected function parentHeight(){
       return $this-> height = 5.8;
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
    function childHeight(){
       return $this->parentHeight();
    }
    
    
}



$obj = new ChildOwnBG("Land", "White", "5.6");
echo $obj-> parentInfo();

echo "<br>";

echo $obj-> childHeight();
echo "<br>";
// echo $obj-> parentHeight();
echo "<br>";



// Public    - > We can use within Parent Class, Child Class and Creating Object
// Protected - > We can use within Parent Class and Child Class
// Private    - > We can use within only Parent Class








