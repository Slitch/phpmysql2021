<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
</head>
<body>

<form action="calendar.php" method="post">
<?php # Script 2.6 - calendar.php #2

// Create array of months.
$months = [1 =>
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December'
];

// Create array for days.
$days = range(1, 31);

// Create array for years.
$years = range(2021, 2031);

// Generate the month pull-down.
echo '<select name="month">';
foreach ($months as $key => $value) {
	echo "<option value=\"$key\">
	$value</option>\n";
}
echo '</select>';

// Generate the days pull-down
echo '<select name="day">';
foreach ($days as $value) {
	echo "<option value=\"$value\">$value</option>\n"; 
}
echo '</select>';

echo '<select name="year">';
foreach ($years as $value) {
	echo "<option value=\"$value\">$value</option>\n"; 
}
echo '</select>';
?>
</form>

</body>
</html>