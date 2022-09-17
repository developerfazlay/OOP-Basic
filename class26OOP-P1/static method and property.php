<?php

// Static Method and Property

use StructureClass as GlobalStructureClass;

class StructureClass{
    public static $name = "Fazlay Rabbi";
    public static function dateFormating($customDate){
        $cDate = date_create($customDate);
        return date_format($cDate,"d/m/Y");
    }
}

echo StructureClass::$name;
echo "<br>";

class ProductClass{
    public function productList(){
        $product['name']          = "Apple";
        $product['price']         = "200";
        $product['expired_date']  = StructureClass::dateFormating("2022-8-31");

        return $product;
    }
    
}

$obj = new ProductClass();
echo "<pre>";
print_r($obj->productList());
echo "</pre>";


