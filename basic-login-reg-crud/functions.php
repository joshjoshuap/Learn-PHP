<?php include "dbconnect.php";

function updateData()
{
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];


  $updateQuery = "UPDATE users SET  pass='$password'
  WHERE username = '$username'";

  $sql = mysqli_query($connection, $updateQuery);
  if (!$sql) {
    die("Update Query Failed" . mysqli_error($connection));
  }
}

function deleteData()
{
  global $connection;
  $username = $_POST['username'];


  $deleteQuery = "DELETE FROM users WHERE username = '$username'";

  $sql = mysqli_query($connection, $deleteQuery);
  if (!$sql) {
    die("Delete Query Failed" . mysqli_error($connection));
  }
}
