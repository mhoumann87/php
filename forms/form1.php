<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Exchange Services</title>
</head>
<body>

<?php

$kr = $_REQUEST['kr'];
$rate = 8.43;
$fee = 20;

$dollars = ($kr - $fee) / $rate;
$dollars = number_format($dollars, 2, ",",".");

echo "For DKR $kr you recieve USD $dollars";

?>
    
</body>
</html>