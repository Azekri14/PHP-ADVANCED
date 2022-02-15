<?php
$student = array(
    "naam"=>"Mohamed ",
    "achternaam"=>"Azekri",
    "leeftijd"=>26,
    "opleiding"=>"Software Development"
  
);

echo $student['naam'] . $student['achternaam'] . " is " . $student['leeftijd'] . " jaar oud en is student aan het ROC van Amsterdam aan de opleiding " . $student['opleiding'] . ".";

?>