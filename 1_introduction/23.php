<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare PHP versions</title>
</head>
<body>

<?php
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . '<br>';
}
if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . '<br>';
}

if (version_compare(PHP_VERSION, '7.0.0', '>=')) {
echo 'I am using PHP 7, my version: ' . PHP_VERSION . '<br>';
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
echo 'I am using PHP 4, my version: ' . PHP_VERSION . '<br>';
}
?>
    
</body>
</html>