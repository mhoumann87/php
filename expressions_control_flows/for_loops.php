<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For-loops</title>
</head>
<body>
<?php

    echo '<h2>Exercise 1</h2><br><br>';

    for ($i = 64;$i >= 1; $i= $i / 2) {
        echo "$i, ";
    }

    echo '<br><br><hr><br><br><h2>Exercise 2</h2><br><br>';

    for ( $i = 2 ;$i <= 100 ; $i = $i + 2 ) {
        echo "$i, ";
    }

     echo '<br><br><hr><br><br><h2>Exercise 3</h2><br><br>';

     for ( $i = 100 ;$i <= 200 ; $i = $i + 10 ) {
        echo "$i, ";
    }


?>
</body>
</html>