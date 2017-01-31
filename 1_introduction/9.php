<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Color</title>
</head>
<body>

<?php
$myString = 'PHP Tutorial';

$myString = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$myString);
echo $myString;
 
?>
    
</body>
</html>