<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Check Email</title>
</head>
<body>

    <h1>Check Email</h1>

    <form action="check_email.php" method="POST">
        <label>Enter an email address:</label>
        <input type="text" name="email">
        <input type="submit" value="Check Email">
    </form>

    <br><br><br>

    <h1>Result</h1>

    <?php
    
    function check_email ($email) {
        if (preg_match('/^[a-zd._-]+@([a-zd-]+.)+[a-z]{2,6}$/i', $email) == 0 ) {
            $result = "You must enter a valid email address";
        } else {
            $result = 'This is a valid email address';
        }
        return $result;
    }

    if (empty($_POST['email'])) {

        echo 'You must enter an email';
    } else {
        echo check_email($_POST['email']);
    }

?>
    
</body>
</html>