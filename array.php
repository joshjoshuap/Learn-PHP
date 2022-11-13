<?php

// Multi Array
$personName = array("person1" => "Joshua", "person2" => "Juan");

echo $personName['person2'];

$person = array(
    array("Joshua", "Juan", "Jose"),
    array("P", "Tamad", "Rizal"),
    array(21, 0, 100)
);

echo "Name: " . $person[0][0] . "<br /> Lastname: " . $person[1][0] . "<br />  Age " . $person[2][2];
