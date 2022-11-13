<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <h4> Internal Page </h4>
  <form action="form.php" method="post">
    <input type="text" name="username" id="" placeholder="Enter Name">
    <br />
    <input type="password" name="password" id="" placeholder="Enter Password">
    <br />
    <input type="submit" name="btnsubmit" value="SUBMIT">
  </form> -->

  <!-- <h3> Internal Page Getting Data </h3>

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
?> -->

  <h4> External Page </h4>
  <form action="form_process.php" method="post">
    <input type="text" name="username" id="" placeholder="Enter Name">
    <br />
    <input type="password" name="password" id="" placeholder="Enter Password">
    <br />
    <input type="submit" name="btnsubmit" value="SUBMIT">
  </form>

</body>

</html>