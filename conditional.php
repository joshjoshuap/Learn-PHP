<?php
// Switch Case
$num = 5;
$evenOdd = $num % 2;

switch ($evenOdd) {
  case 0:
    echo "even";
    break;
  case 1:
    echo "odd";
    break;

  default:
    echo "Not a number";
}

// Nested If Else If
$username = "admin";
$password = "123";

if ($username == "admin" && $password == "123") {
  echo "Successful Login";
} elseif ($username != "admin" && $password == "123") {
  echo "Username Incorrect";
} elseif ($username == "admin" && $password != "123") {
  echo "Password Incorrect";
} elseif ($username != "admin" && $password != "123") {
  echo "Both Username and Password are Incorrect";
} else {
  echo "No Credentials";
}
