<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Exchange Services</title>
</head>
<body>

<?php

$kr = $_GET['kr'];
$rate = 8.43;
$fee = 20;

$dollars = ($kr - $fee) / $rate;
$dollars = number_format($dollars, 2, ",",".");

echo "For DKR $kr you recieve USD $dollars";

?>
<br><br>
<a href="form2.html">New Calculation</a>
    
</body>
</html>