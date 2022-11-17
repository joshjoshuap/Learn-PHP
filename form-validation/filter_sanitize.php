<?php

if (filter_has_var(INPUT_POST, 'email')) {
    $email = $_POST['email']; // get input value

    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitze email remove unnecessary characters

    // validate email
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        echo 'Email is Valid';
    } else {
        echo $email . '<br />';
        echo 'Email must be Valid';
    }
}

/*
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_URL

FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_NUMBER_FLOAT
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL
*/

?>

<form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
    <div>
        <input type="text" name='email' placeholder="email" />
        <button type='submit'>Submit</button>
    </div>
</form>