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
# Concatenating one value to another..

// Create the variables:
$title = 'Title';
$subtitle = 'Subtitle';
$title .= $subtitle;

// Print the values:
echo $title;

?>
</body>
</html>