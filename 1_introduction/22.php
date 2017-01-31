<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show url</title>
</head>
<body>

<?php

    if (empty($_SERVER['HTTPS'])) {
    $protocol = 'HTTP://';
    } else {
    $protocol = 'HTTPS://';
    }    
    
    $host = $_SERVER['HTTP_HOST'];
    $path = $_SERVER['REQUEST_URI'];
    
    $url = [$protocol, $host, $path];

    $url = implode("", $url);
    echo $url.'<br>';
?>
    
</body>
</html>