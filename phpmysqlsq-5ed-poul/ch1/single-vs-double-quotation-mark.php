<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Single vs double quotation marks</title>
</head>
<body>
<?php 
$var = 'test';
echo "<p>var is equal to $var (double qoutes)</p>";
echo '<p>var is equal to $var (single qoutes)</p>';
echo "<p>\$var is equal to $var (double qoutes, escaped dollar sign)</p>";
echo '<p>\$var is equal to $var (single qoutes escaped dollar sign)</p>';



 ?>
</body>
</html>