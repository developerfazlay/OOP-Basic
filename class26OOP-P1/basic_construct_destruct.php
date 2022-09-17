 <?php


// class Calculation{
//    public $num1 = 20;
//    public $num2 = 15;

//    function __construct($a, $b)
//    {
//     $result = $a+$b;
//     echo $result;
//     $this-> num1 = 50;
//    }

//    public function sum($a, $b){
//         $c = $a+$b;
//         $this-> num1 = 60; 
//         $this->result = $this->num1+$this->num2;
//         // return $this->num1."+".$this->num2."=".$this->result;
//        return $this-> num1;
//     }
// }



// $obj =  new Calculation(12,8);

// // $obj-> num1 = 30;


// // echo $obj->sum(5, 10);

// echo "<br>";
// // echo $obj->num2
// echo $obj-> num1;
// echo "<br>";
// echo $obj-> sum(8,12); 
// echo "<br>";

// echo $obj-> num1;

class mathmatic{
   public $a = "Mango";
   public $b = "Red";
   public $result;
   const PI  = 3.1416;

   function __destruct()
   {
      echo "The Fruit Name Is: $this->a and color is: $this->b";
   }

   function __construct($fruitName, $color){
      
      $this-> a = $fruitName;
      $this-> b = $color;

      
   }

   // function sum(){   
   //    $this->result = $this->a+$this->b;
   //    echo $this->result;
   // }

   function sub($val1, $val2){
      $this-> a = $val1;
      $this-> b = $val2;
      $result = $this->a - $this->b ;
      return $result;
   }


  
   
}
 
//  $obj = new mathmatic("Banana", "Yellow");
// echo "<br>";
// // echo $obj -> sum();
// echo "<br>";
// echo "The Pi value is: ".$obj::PI;


// echo "<br>";
// echo $obj-> a;
// echo "<br>";
// // echo $obj-> sub(15, 10);
// echo "<br>";
// echo $obj-> a;
// echo "<br>";


class calculator  {
   public $num1;
   public $num2;
    

   function __construct($n1, $n2){
      $this-> num1 = $n1;
      $this-> num2 = $n2;
   }

   function sum(){
      $result =  $this-> num1 + $this-> num2;
      return $result;
   }
   function sub(){
      $result = ($this->num1) - ($this-> num2);
      return $result;
   }

   function resultMerge(){
     return $mergeResult = $this->sum()- $this-> sub();
      // return $mergeResult;
   }


   






}

$obj = new calculator(15, 5);

// echo $obj -> sum();
echo "<br>";
// $obj = new calculator(15, 5);
// echo $obj -> sub();
// echo $obj -> num1;
// echo $obj -> num2;

echo "<br>";
echo "The final result is: ".$obj->sum().'-'.$obj->sub().' = '.$obj->resultMerge();





?>