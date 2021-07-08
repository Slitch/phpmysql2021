<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Multidimensional Arrays</title>
</head>
<body>
<?php
$primes = [2, 3, 5, 7];
$sphenic = [30, 42, 66, 70];
$numbers = [
	'Primes' => $primes,
	'Sphenic' => $sphenic
];
echo "The firs sphenic number is {$numbers['Sphenic'][0]}.";
?>
</body>
</html>