<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessing Substrings</title>
</head>
<body>

<?php
    echo '
        <form method="POST">
        <label>Enter User Name (at least 10 chars: </label><br><br>
        <input type="text" name="name"><br><br>
        <input type="submit" value="Send Name"><br><br>  
        </form>
        ';

        if (empty($_POST['name'])) {
            $username = '';
        } else {
            $username = $_POST['name'];
            $substring = substr($username, 0, 8);
            echo $substring;
        }

        echo '<br><br><hr><br><br>';

        $myString = 'watch out for that tree';

        print substr($myString, 6, 5);

        echo '<br><br>';

        print substr($myString, 17);

        echo '<br><br>';

        print substr($myString, 20, 5);

        echo '<br><br>';

        print substr($myString, -6);
        
        print substr($myString, -17, 5);

        echo '<br><br>';

        print substr($myString, 15, -2);
        
        print substr($myString, -4, -1);
        
        


?>

</body>
</html>