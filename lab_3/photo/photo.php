<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo System Result</title>
</head>
<body>

    <h2>Photosystem Result</h2>

    <?php

    $photo["David"] = "http://www.example.com/images/david.jpg";
    $photo["Arne"] = "http://www.example.dk/pictures/bigarne.gif";
    $photo["Niels"] = "http://www.example.dk/images/Niels.jpg";
    
        if (empty( $_POST['name'])) {
            echo 'You need to enter a name';
        } else {

            $name = $_POST['name'];

            echo "<h3>Photo of $name</h3>
            <img width=’300’ src=’$photo[$name]’ />";
        }

?>
    
</body>
</html>






