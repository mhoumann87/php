<?php

session_start();

var_dump($_SESSION['cart']);

$cart = implode(',', $_SESSION['cart']);

$query = "SELECT * FROM shop WHERE IN ($cart)";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <?php echo '<p>'.$query.'</p>';?>
        <a href="shop.php">Continue shopping</a>
    </main>
</body>
</html>