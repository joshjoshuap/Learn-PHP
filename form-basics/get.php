<?php
$name = '';
$age = '';

if (isset($_GET['btnsubmit'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
}

echo $name;
echo $age;
?>

<form actions='get.php' method='GET'>
    <input type="text" name="name" placeholder="enter your name" />
    <br />
    <input type="text" name="age" placeholder="enter your age" />
    <button type="submit" name='btnsubmit'>Submit</button>
</form>