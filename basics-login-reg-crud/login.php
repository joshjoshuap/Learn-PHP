<?php include "dbconnect.php";

session_start();

if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
  $_SESSION['status'] = "invalid";
}

if ($_SESSION['status'] == 'valid') {
  echo "<script>window.location.href='home.php'</script>";
}


if (isset($_POST['btn-submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    echo "Enter your username and password";
  } else {
    $validate = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
    $sql = mysqli_query($connection, $validate);
    $rowValidate = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql) > 0) {
      $_SESSION['status'] = 'valid';
      $_SESSION['username'] = $rowValidate['username'];

      echo "<script>window.location.href='home.php'</script>";
    } else {
      $_SESSION['status'] = 'invalid';
    }
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

    <form action="login.php" method="post">
      <h2>LOGIN</h2>
      <h4>Username: </h4>
      <input type="text" name="username" id="">
      <h4>Password: </h4>
      <input type="password" name="password" id="">
      <br />
      <button class="btn btn-primary" type="submit" name="btn-submit">Login</button>

    </form>

  </div>

</html>