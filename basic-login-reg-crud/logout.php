<?php
session_start();

// unsetting and removing session
$_SESSION['status'] = 'invalid';
unset($_SESSION['username']);

echo "<script>window.location.href='login.php'</script>";
