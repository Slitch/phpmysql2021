<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>for loop page 70</title>
</head>
<body>
<?php 
# PHP and MySQL 5th Edition - Larry Ullman
# ISBN-13: 978-0-13-430184-6
# concat_city.php
# Date: June 16, 2021
# Creatd by Poul Lynge Larsen
# Testing for loop sample from page 70

echo 'for loop<br>';
for ($i=1; $i <= 10; $i++) { 
	echo "$i<br>\n";
};
echo 'while loop<br>';
$k = 0;
while ($k <= 10) {
	echo "$k\n<br>";
	$k++;
};
?>
</body>
</html>