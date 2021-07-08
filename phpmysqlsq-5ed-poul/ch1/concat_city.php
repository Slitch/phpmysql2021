<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Concatenation with city names</title>
</head>
<body>
<?php
# PHP and MySQL 5th Edition - Larry Ullman
# ISBN-13: 978-0-13-430184-6
# concat_city.php
# Date: June 13, 2021
# Creatd by Poul Lynge Larsen
# concatenating string from page 21.

// Create the variables:
$city = 'Seattle';
$state = 'Washington';
// $address = $city . $state;



// Print the values:
// echo "The address is: $address";
/* The browser prints:
The address is: SeattleWashington
*/
// we need a space between 'Seattle' and 'Washington'

// fix
$address = $city . ', ' .  $state;
echo "<p>The address is: <em><strong>$address</strong></em></p>";
?>
</body>
</html>