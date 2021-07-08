<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calendar</title>
</head>
<body>

<form action="calendar.php" method="post">
<?php # Script 2.9 - calendar.php #2

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

// Generate the month pull-down.
echo '<select name="month">';
foreach ($months as $key => $value) {
	echo "<option value=\"$key\">
	$value</option>\n";
}
echo '</select>';

// Generate the days pull-down menu:
echo '<select name="day">';
for ($day=1; $day <= 31; $day++) { 
	echo "<option value=\"$day\">$day</option>\n";
}
echo '</select>';

// Generate the year pull-down menu:
echo '<select name="day">';
for ($year=2021; $year <= 2031; $year++) { 
	echo "<option value=\"$day\">$year</option>\n";
}
echo '</select>';



?>
</form>

</body>
</html>