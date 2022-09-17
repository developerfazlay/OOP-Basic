<?php

require "./qualification.php";
require "./experience.php";

$qualificObj = new exper\Qualification();
echo $qualificObj -> experienceList();

echo "<br>";


$qualificObj = new quali\Qualification();
echo $qualificObj -> qualificationList();

// $experObj = new experience();
// echo $experObj -> qualificationList();