<?php

// Trait


trait BkashPayment{
    function bkashPayMethod(){
        return "Payment done by Bkash";
    }
}


trait NagadPayment{
    function nagadPayMethod(){
        return "Payment done by Nagad";
    }
}


trait RoketPayment{
    function rocketPayMethod(){
        return "Payment done by Rocket";
    }
}


class ProcessPayment{
    use BkashPayment;
    use NagadPayment;
    use RoketPayment;
    function finalPay(){
        return "Successfully Paid. Thanks";
    }
}

$obj = new ProcessPayment;

echo $obj->nagadPayMethod();
echo $obj->bkashPayMethod();
echo $obj->rocketPayMethod();
echo "<br>";
echo $obj->finalPay();



