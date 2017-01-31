<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers of lines</title>
</head>
<body>
<?php
    $file = basename($_SERVER['PHP_SELF']); 
    $no_of_lines = count(file($file)); 
    echo 'There are '.$no_of_lines.' lines in the file "'.$file.'"<br>';
?>
</body>
</html>