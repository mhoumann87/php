<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check e-mail</title>
</head>
<body>
<?php

echo '<form method="POST">
      <label>Enter an email address</label><br>
      <input type="text" name="email"><br><br>
      <input type="submit" value="Check"><br><br>
      </form>';

if (!empty($_POST['email'])) {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email.' is a valid email address.<br>';
    } else {
    echo $email.' is NOT a valid email address.<br>';
    }

} else {
    $email = '';
}




?>
</body>
</html>