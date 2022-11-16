<?php

// Basics
$intial = 'J'; // character
$name = "Joshua"; // string
$age = 21; // number
$grade = 1.1; // float
$allowed = true; //boolean

echo "My name is " . $name;
/* My name is Joshua */

// Constant
define('PASSWORD', '123456');
echo PASSWORD;
// echo password; // error

// Arithmetic
$firstNum = 2;
$secondNum = 3;

$addition = $firstNum + $secondNum;
$subtraction = $firstNum - $secondNum;
$multiplication = $firstNum * $secondNum;
$division = $firstNum / $secondNum;

echo 'Addition' . $addition;
echo 'Subtraction' . $subtraction;
echo 'Mulitply' . $multiplication;
echo 'Division' . $division;
/* 
Addition: 5
Subtraction: -1
Multiplication: 6
Division: 0.66666666666667
*/
