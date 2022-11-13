  <?php
  function helloWorld()
  {
    echo "Hello World";
  }

  helloWorld();


  function firstNum()
  {
    return 5;
  }

  function secondNum()
  {
    return 5;
  }

  echo "Total: " . (firstNum() + secondNum());


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

  echo pow(2, 3); // 8 = 2 * 2 * 2 
  echo rand(1, 100); // random numbers between 1-100
  echo sqrt(25); // 5
  echo ceil(4.6); // 5 rounded up
  echo floor(4.6); // 4 rounded down

  $name = "Joshua";

  echo strlen($name); // 6
  echo strtoupper($name); // JOSHUA
  echo strtolower($name); // joshua


  $number = array(2, 4, 16, 8, 10);
  echo max($number);
  echo "<br />";
  echo min($number);
  ?>


