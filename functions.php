<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <h3>Basics</h3>
  <?php
  function helloWorld()
  {
    echo "Hello World";
  }

  helloWorld();
  ?> -->


  <!-- <h3>Adding Functions</h3>
  <?php

  function firstNum()
  {
    return 5;
  }

  function secondNum()
  {
    return 5;
  }

  echo "Total: " . (firstNum() + secondNum());

  ?> -->


  <!-- <h3>Parameters Function</h3>
  <?php

  function addTwoNumbers($num1, $num2)
  {
    echo "Total: " . ($num1 + $num2);
  }

  addTwoNumbers(5, 5);
  ?> -->


  <!-- <h3>Global Variable - Scope</h3>
  <?php
  $name = "Joshua"; // global
  function displayName()
  {
    global $name; // convert to global
    $name = "Juan"; // local

  }

  echo $name; // global
  echo "<br />";
  displayName();
  echo $name // global
  ?> -->

  <!-- <h3>Math Functions</h3>
  <?php
  echo pow(2, 3); // 8 = 2 * 2 * 2 
  echo rand(1, 100); // random numbers between 1-100
  echo sqrt(25); // 5
  echo ceil(4.6); // 5 rounded up
  echo floor(4.6); // 4 rounded down
  ?> -->

  <!-- <h3>Strings</h3>
  <?php
  $name = "Joshua";

  echo strlen($name); // 6
  echo strtoupper($name); // JOSHUA
  echo strtolower($name); // joshua

  ?> -->

  <h3>Arrays</h3>
  <?php

  $number = array(2, 4, 16, 8, 10);
  echo max($number);
  echo "<br />";
  echo min($number);
  ?>


</body>

</html>