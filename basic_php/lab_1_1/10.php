<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Protocol</title>
</head>
<body>

<?php
    if (empty($_SERVER['HTTPS'])) {
    echo 'The protocol is http';
    } else {
    echo 'The protocol is https';
    }   
?>
    
</body>
</html>