

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>
</head>
<body>
    <main>
    <form method="POST">
    <label><H2>Enter Your Name</H2></label>
    <input type="text" name="name">
    <input type="submit" value="Submit name">
    </form>

    <?php
    $name = NULL;
    
    $name = $_POST['name'];
    echo 'Hello '.$name.'<br>';
    ?>
    </body>
</html>