<?php

abstract class StructureClass{
    abstract public function insert();
    abstract public function show();
    abstract public function update();
    abstract public function delete();

    public $fname = "Banana";
    function sum(){
        return 5+10;
    }
    public static $PI = 3.1416;
}

class ProductController extends StructureClass{
    function insert(){
      return "Instered";  
    }
    function show(){
        return "Showed";  
    }
    function update(){
        return "Updated";  
    }
    function delete(){
        return "Deleted";  
    } 

    public static function productInfo(){
        return "The product description";
    }
       
}
$obj = new ProductController;
echo $obj -> fname;
echo $obj -> sum();
echo StructureClass::$PI;
//static possible to view a property
echo "<br>";

echo ProductController::productInfo();
echo "<br>";
echo $obj-> delete();

// Abstract class declared few method but there will not have any defination. After extending the class will have to use them to defination. 



