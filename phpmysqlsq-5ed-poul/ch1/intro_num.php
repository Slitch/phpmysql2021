<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<title>intro num</title>
</head>
<body>
<?php 
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# Page 23 - round() and number_format()

echo '<p>Number rounded down to whole number.</p>';
$n = 3.34;
$n = round($n);
echo "<p>$n<p/>\n"; // 3

echo '<p>Number rounded down to 3 decimals.</p>';
$p = 3.141592;
$p = round($p, 3); // 3.142
echo "<p>$p<p/>\n";

echo '<p>Format a number with grouped thousands.</p>';
$k = 20943;
$k = number_format($k); // 20,943
echo "<p>$k</p>";

echo '<p>Format a number with grouped thousands and two decimals.</p>';
$j = 20943;
$j = number_format($j, 2); // 20,943.00
echo "<p>$j</p>";

echo 'https://www.php.net/number_format
// number_format ( float $num , int $decimals = 0 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string

// replace 
// https://stackoverflow.com/questions/7461459/change-comma-to-dot-working-with-decimals-in-php
// $product['protein'] = str_replace(',', '.', $product['protein']);

// https://www.php.net/str_replace
// str_replace ( array|string $search , array|string $replace , string|array $subject , int &$count = null ) : string|array

echo '<p>Formatted with point thousand-seperation and comma decimal-seperation.</p>';
// Number converted to Danish notation
$num = 1245375.35;
$num = number_format($num, 2, ",", ".");
echo "<p>$num</p>";

echo '<p>Convert variable input from point-seperated decimal to comma-seperated decimal.</p>';
echo '<p>if input number contain "point/dot" for decimal seperation replace it with a comma.</p>';
// Convert variable input from point-seperated decimal to comma-seperated decimal
$input_num = '1000000,35';
$input_num = str_replace(',', '.', $input_num);
$input_num = number_format($input_num, 2, ",", ".");
echo "<p>$input_num</p>";
 ?>
</body>
</html>