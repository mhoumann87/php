<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days</title>
</head>
<body>

<?php

$day = date('l');
$month = date('F');
$today = date("l, F j Y");
$name = 'Chuck Norris';
$chuckfacts = 'Chuck Norris beat the sun in a staring contest';

echo 'Day is '. $day.'.<br>';
echo 'Month is '.$month.'.<br>';
echo 'Today is '.$today.'.<br>';
echo $chuckfacts;

?>
    
</body>
</html>