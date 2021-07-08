<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Strings</title>
</head>
<body>
<?php
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# page 22 tip: Concatenating one value to another - example 2:

// Create the variables:
$city = 'Copenhagen';
$state = 'Denmark';
// $address = "$city, $state";
// or this..
$address = $city;
$address .= ', ';
$address .= $state;
// Print the values:
echo $address;

?>
</body>
</html>