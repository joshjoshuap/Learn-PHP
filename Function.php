<?php

// Single Function
function helloWorld()
{
    echo "Hello World";
}
helloWorld();

// Multiple Function
function firstNum()
{
    return 5;
}

function secondNum()
{
    return 5;
}
echo "Total: " . (firstNum() + secondNum()); // Total: 10

// Function Parameter
function addTwoNumbers($num1, $num2)
{
    echo "Total: " . ($num1 + $num2);
}

addTwoNumbers(5, 5); // Total: 10

// Function Reference
$name = "Joshua"; // global
function displayName()
{
    global $name; // convert to global
    $name = "Juan and " . $name; // local
}

echo $name; // Joshua
echo "<br />";
displayName();
echo $name; // Juan and Joshua

// Variable Function
$greet = function ($input) {
    echo 'Hello ' . $input;
};

$greet('Joshua');
