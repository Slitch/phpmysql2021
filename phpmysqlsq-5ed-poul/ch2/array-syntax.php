<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Syntax</title>
</head>
<body>
<?php
# page 56

$states = array(
	'MD' => 'Maryland',
	'PA' => 'Pennsylvania',
	'IL' => 'Illinois',
	'MO' => 'Missouri',
	'IA' => 'Iowa'
);

// echo $states['MD'];
// echo "IL is $states['MD']."; // BAD!
// echo 'IL is ' . "$states['MD']" . '.'; // BAD!

echo 'IL is ' . $states['MD'] . '.'; // GOOD!
echo '<br>';
echo "IL is {$states['MD']}."; // GOOD!
?>
</body>
</html>