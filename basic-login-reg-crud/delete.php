<?php include "functions.php";

if (isset($_POST['btn-submit'])) {
  deleteData();
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

    <form action="delete.php" method="post">
      <h2>DELETE USERNAME</h2>
      <h4>Username: </h4>
      <input type="text" name="username" id="">
      <button class="btn btn-primary" type="submit" name="btn-submit">Delete</button>
      <a href="admin.php">User list</a> |
      <a href="update.php"> Update User</a> |
      <a href="create.php">Create User</a>
    </form>
  </div>

</html>