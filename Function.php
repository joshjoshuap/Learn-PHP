<?php

// Single Function
function helloWorld()
{
    echo "Hello World";
}
helloWorld();

// Two Function
function firstNum()
{
    return 5;
}

function secondNum()
{
    return 5;
}
echo "Total: " . (firstNum() + secondNum());


// Function Parameter
function addTwoNumbers($num1, $num2)
{
    echo "Total: " . ($num1 + $num2);
}

addTwoNumbers(5, 5);

$name = "Joshua"; // global
function displayName()
{
    global $name; // convert to global
    $name = "Juan"; // local

}

echo $name; // global
echo "<br />";
displayName();
echo $name; // global
