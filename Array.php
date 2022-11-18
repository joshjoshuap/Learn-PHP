<?php

// Single Array
$person = array("Joshua", "Juan", "Jose");
echo $person[0]; // Joshua

// Single Array - 2
$fruit = ['Apple', 'Banana', 'Orange'];
echo $fruit[0]; // Apple

// Multi Array
$person = array(
    array("Joshua", "P", 21),
    array("Jose", "Rizal", 100),
    array("Juan", 'Tamad', 0)
);

echo "Name: " . $person[0][0] . "<br /> Lastname: " . $person[0][1] . "<br />  Age " . $person[0][2];
/* 
Name: Joshua
Lastname: P
Age 100
*/

// Multi Array - 2
$fruit = [
    ['Apple', 'Orange'],
    ['Banana', 'Mango'],
    ['Strawberry']
];

echo $fruit[2][0]; // Strawberry

// Associative Array
$personName = array(
    "person1" => "Joshua",
    "person2" => "Juan"
);
echo $personName['person2']; // Juan

// Associative Array - 2   
$fruit = [
    'red' => 'apple',
    'yellow' => 'banana',
    'orange' => 'orange'
];

echo $fruit['red']; // apple

// Array Length
$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($number); // 10
echo sizeof($number); // 10

// Array Merge
$number1 = array(1, 2, 3, 4, 5);
$number2 = array(6, 7, 8, 9, 10);
$totalNumber = array_merge($number1, $number2); // array(1,2,3,4,5,6,7,8,9,10)

// Push
$subject = array('English');
array_push($subject, 'Math'); // array('English', Math)

// Pop
$subject = array('English', 'Science');
array_pop($subject); // array('English')

// Unshift
$subject = array('English', 'Science');
array_unshift($subject, 'Math'); // array('Math','English', 'Science')

// Shift
$subject = array('English', 'Science');
array_shift($subject); // array('Science')

// 