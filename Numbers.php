<?php

// Number Methods
echo pow(2, 3); // 8 = 2 * 2 * 2 
echo rand(1, 100); // random numbers between 1-100
echo sqrt(25); // 5
echo ceil(4.6); // 5 
echo floor(4.6); // 4 
echo abs(-100); // 100

$number = array(2, 4, 16, 8, 10);
echo max($number); // 10 
echo min($number); // 2 

$num = 5;
$num++; // 6
$num--; // 4

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
