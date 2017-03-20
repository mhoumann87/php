<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last modified</title>
</head>
<body>

<?php
$file = basename($_SERVER['PHP_SELF']);
$fileChanged = filemtime($file); 
echo "Last modified " . date("l, dS F, Y, H:i", $fileChanged).'<br>';
?>
    
</body>
</html>