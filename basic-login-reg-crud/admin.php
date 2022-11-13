<?php include "dbconnect.php";

$displayQuery = "SELECT * FROM users";
$sql = mysqli_query($connection, $displayQuery);

if (!$sql) {
    die('Query Failed');
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
        .head {
            background-color: black;
            color: white;
        }

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
        <table>
            <tr class='head'>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
            while ($sqlRow = mysqli_fetch_assoc($sql)) {
                echo "
  <tr>
  <td>" . $sqlRow['username'] . "</td>
  <td>" . $sqlRow['pass'] . "</td>
  </tr>
  ";
            }
            ?>

        </table>
        <div>
            <a href="create.php">Create User</a> |
            <a href="update.php"> Update User</a> |

            <a href="delete.php"> Delete User</a>
        </div>
    </div>

</body>

</html>