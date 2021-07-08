<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pursue5 - Create a new script 5 numeric</title>
</head>
<body>
<?php 
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# Page 34 Tip: Create a new script from scratch

// Create a new script, from scratch, that defines, manipulates, and display the values of some numeric variables.

// Running calculator
// Create variables:
$run_distance_km = 10;
$time_minutes = 79; 
$average_speed_km_pr_hour = $run_distance_km / ($time_minutes/60);
$average_speed_km_pr_hour = number_format($average_speed_km_pr_hour, 2);


echo "<p>You ran <strong>$run_distance_km</strong> km.<p>";
echo "<p>It took you <strong>$time_minutes</strong> min.<p>";


echo "<p>Your average speed was <strong>$average_speed_km_pr_hour km/h</strong>.";
 ?>
</body>
</html>