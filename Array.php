<?php

// Single Array
$person =  array("Joshua", "Juan", "Jose");
echo $person[0]; // Joshua

// Multi Array
$person = array(
    array("Joshua", "Juan", "Jose"),
    array("P", "Tamad", "Rizal"),
    array(21, 0, 100)
);

echo "Name: " . $person[0][0] . "<br /> Lastname: " . $person[1][0] . "<br />  Age " . $person[2][2];
/* 
Name: Joshua
Lastname: P
Age 100
*/

// Associative Array
$personName = array("person1" => "Joshua", "person2" => "Juan");
echo $personName['person2']; // Juan

// Array Length
$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($number); // 10
