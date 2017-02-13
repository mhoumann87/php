<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Days in Month</title>
</head>
<body>
<?php
	date_default_timezone_set('America/Los_Angeles');

$month = $_POST['month'];

if (empty($_POST['year'])) {
	$year = 2017;
} else {
	$year = $_POST['year'];
}

$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

	if ($days < 30) {
				print "There are $days days in the month of Febuary year $year";
			} else if ($days > 30) {
				print "This month must be January, March, May, July, August, October or December";
			} else {
				print "This month must be April, June, September or November";
			}
?>	
</body>
</html>	