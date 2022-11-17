<?php
if (isset($_POST['btnsubmit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $usernLength = strlen($username);
  $passLength = strlen($password);

  if ($usernLength < 5) {
    if ($passLength < 8) {
      echo "Username must been five characters <br />";
      echo "Password must been 8 characters longer";
    } else {
      echo "Username must been five characters";
    }
  } elseif ($passLength < 8) {
    if ($usernLength < 5) {
      echo "Username must been five characters <br />";
      echo "Password must been 8 characters longer";
    } else {
      echo "Password must been 8 characters longer";
    }
  } elseif ($usernLength > 5 && $passLength > 7) {
    echo "Registered";
  }
}
