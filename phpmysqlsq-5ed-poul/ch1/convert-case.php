<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Convert Case</title>
</head>
<body>
<?php 
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# Page 22 Tip: Convert case of strings
// strtolower(str) 		// Convert entire string to lowercase
// strtoupper(string) 	// Convert intire string to uppercase
// ucfirst(str)			// Capitalizes the first character
// ucwords(str)			// Capitalizes the first character of every word

$lowercase = strtolower('THIS STRING IS WRITTEN IN UPPERCASE BUT CONVERTED TO LOWERCASE TROUGH PHP STRTOLOWER()');
echo "<p>$lowercase\n</p>";

$uppercase = strtoupper('This string is written in lowercase but converted to uppercase trough PHP strtolower()');
echo "<p>$uppercase\n</p>";

$first_upper = ucfirst('the first character of this sentence is convertet to uppercase trough ucfirst()');
echo "<p>$first_upper\n</p>";

$ucwords = ucwords('the first character of each word is convertet to uppercase trough ucword()');
echo "<p>$ucwords\n</p>";

 ?>
</body>
</html>