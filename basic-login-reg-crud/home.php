<?php
require("session.php");

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

<body>
  <?php
  echo "<h1> Welcome '" . $_SESSION['username'] . "' </h1>";
  ?>
  <a href="admin.php">Admin</a> |
  <form action="logout.php" method="post"><button class="btn btn-danger" href="logout.php">LOGOUT</button></form>
</body>

</html>