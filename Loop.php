<?php

// Do While
$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while ($i <= 5);

// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Loop: " . $i . "<br/>";
}
/* 
1
2
3
4
5
*/

// For Each - Single Array
$people = array("Joshua", "Juan", "Jose");
foreach ($people as $person) {
    echo $person . '<br />';
}
/* 
Joshua
Juan
Jose
*/

// For Each - Multi Array
$name = array(
    array("Joshua", "Juan", "Jose"),
    array("Maria", "Andres", "Emilio")
);

foreach ($name as $person) {
    foreach ($person as $firstname) {
        echo $firstname . "<br />";
    }
}

/* 
Joshua
Juan
Jose
Maria
Andres
Emilio
*/

// For Each - Associate Array
$personEmail = array("Joshua" => "joshua@email.com", "Juan" => "juan@email.com");
foreach ($personEmail as $person => $email) {
    echo $person . ': ' . $email;
}
/* 
Joshua: joshua@email.com
Juan: juan@email.com
*/