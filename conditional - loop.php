<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!-- <h3>Conditonal</h3>
  <?php

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

  ?> -->



  <!-- <h3> Switch Case </h3>
  <?php

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

  ?> -->



  <!-- <h3> For Loop </h3>
  <?php

  for ($i = 1; $i <= 10; $i++) {
    echo "Loop: " . $i . "<br/>";
  }
  ?> -->



  <h3>For Each Loop</h3>
  <?php
  $name = array(
    array("Joshua", "Juan", "Jose"),
    array("Maria", "Andres", "Emilio")
  );

  foreach ($name as $person) {
    foreach ($person as $firstname) {
      echo $firstname . "<br />";
    }
  }

  ?>



</body>

</html>