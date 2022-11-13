<?php

// For Loop
for ($i = 1; $i <= 10; $i++) {
    echo "Loop: " . $i . "<br/>";
}

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
