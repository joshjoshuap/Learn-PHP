<?php
session_start();

$_SESSION['status'] = 'invalid'; // setting status session to invalid
unset($_SESSION['username']); // removing username from session

echo "<script>window.location.href='login.php'</script>";
