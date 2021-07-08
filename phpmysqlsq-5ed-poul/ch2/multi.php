<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Multidimensional Arrays</title>
</head>
<body>
<p>Some North merican States, Provinces, abd Territories:</p>
<?php # Script 2.7 - multi.php


// Create array mexico.
$mexico = [ // Associative Array Key => Value (key as value).
	'YC' => 'Yucatan',
	'BC' => 'Baja California',
	'OA' => 'Oaxaca'
];

// Create array us.
$us = [
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pennsylvania',
	'IA' => 'Iowa'
];

// Create array canada.
$canada = [
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'NT' => 'Northwest Territories',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island'
];

// Combine the arrays into one array
$n_america = [
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada
];

// Loop through the countries:
foreach ($n_america as $country => $list) {
	
	echo "<h2>$country</h2>\n<ul>\n";

	foreach ($list as $k => $v) {
		echo "    <li>$k - $v</li>\n";
	}

	echo '</ul>' . "\n";

} // En of main FOREEACH.

?>

</body>
</html>