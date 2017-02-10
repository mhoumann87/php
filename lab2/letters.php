<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Letters</title>
</head>
<body>

<?php 

$text = 'a small test in changing the letters in a sentence';

echo $text;

echo '<br><br><hr><br><br>';
echo '<h3>Uppercase</h3>';

echo strtoupper($text);

echo '<br><br><hr><br><br>';
echo '<h3>Lowercase</h3>';

echo strtolower($text);

echo '<br><br><hr><br><br>';
echo '<h3>First letter upper</h3>';

echo ucfirst($text);


echo '<br><br><hr><br><br>';
echo '<h3>All words first letter upper</h3>';

echo ucwords($text);



?>
    
</body>
</html>