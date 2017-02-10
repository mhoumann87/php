<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Days in Month</title>
</head>
<body>
<?php
	date_default_timezone_set('America/Los_Angeles');

	echo '
		<form method="POST">
		<label>Enter a Month</label>
		<input type="number" name="month">
		<input type="submit" value="Enter Month">
		</form>
	';

	if (empty($_POST['month'])) {

		$month = null;
	} else {
		$month = $_POST['month'];
	}

$days = cal_days_in_month(CAL_GREGORIAN, $month, date("Y"));

echo $days;


?>	
</body>
</html>