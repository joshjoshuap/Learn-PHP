<?php

if (isset($_POST['btn-submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost', 'root', '', 'usertest');

  if ($connection) {
    echo "Connected";
  } else {
    die("Database Connection failed");
  }


  $insertQuery = "INSERT INTO users(username,pass) VALUES ('$username', '$password')";

  $sql = mysqli_query($connection, $insertQuery);

  if (!$sql) {
    die('Query Failed');
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<style>
  .container {
    width: 80%;
    display: grid;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
</style>
</head>

<body>

  <div class="container">

    <form action="create.php" method="post">
      <h2>Create User</h2>
      <h4>Username: </h4>
      <input type="text" name="username" id="">
      <h4>Password: </h4>
      <input type="password" name="password" id="">

      <br />
      <button class="btn btn-primary" type="submit" name="btn-submit">Submit</button>
      <a href="readData.php">User list</a> |
      <a href="update.php"> Update User</a> |
      <a href="delete.php"> Delete User</a>
    </form>

  </div>


</body>

</html>