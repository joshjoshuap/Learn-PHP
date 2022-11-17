<?php
session_start();

// validating sessions
if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {

  $_SESSION['status'] = 'invalid';
  unset($_SESSION['username']);
  echo "<script>window.location.href='login.php'</script>";
}
