<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Replacing Substrings</title>
</head>
<body>
    
<?php

$myString = 'My pet is a blue dog';

print substr_replace($myString, 'fish', 12);

echo '<br><br>';

print substr_replace($myString, 'green', 12, 4);

echo '<br><br>';

$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card, 'xxxx ',0, strlen($credit_card)-4);

echo '<br><br>';

print substr_replace($myString, 'fish', -8);

echo '<br><br>';

print substr_replace($myString, 'green', -8, 4);

echo '<br><br>';

print substr_replace($myString, 'Title: ', 0, 0);

?>

</body>
</html>