<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>array - add elememt ad a time</title>
</head>
<body>
<?php
$band[] = 'Jemaine';
$band[] = 'Bret';
$band[] = 'Murray';

// echo "<p>{$band[0]}, {$band[1]}, and {$band[3]}</p>";
echo '<p>' . $band[0] . ', ' . $band[1] . ' and '. $band[2] . '</p>';
echo '<p>' . $band[0] . '</p>';
echo '<p>' . $band[1] . '</p>';
echo '<p>' . $band[2] . '</p>';

$band['fan'] = 'Mel';
echo '<p>' . $band['fan'] . '</p>';
$band['fan'] = 'Dave'; // the value 'Mel' is overwritten with 'Dave'.
echo '<p>' . $band['fan'] . '</p>';

$friut[2] = 'apple';
echo '<p>' . $friut[2] . '</p>';
$friut[2] = 'orange'; // the value 'apple' is overwritten with 'orange'.
echo '<p>' . $friut[2] . '</p>';

$state = array(
	'IA' => 'Iowa',
	'MD' => 'Maryland'
);
echo '<p>' . $state['IA'] . '</p>';
echo '<p>' . $state['MD'] . '</p>';

$artists = array(
	'Clem Snide', 
	'Shins',
	'Eels'
);
echo '<p>' . $artists[0] . '</p>';

$days = array(
	1 =>	'Sun',
			'Mon',
			'Tue',
			'Wed',
			'Thu',
			'Fri',
			'Sat'
);

$ten = range(1, 10);
echo '<p>' . $ten[0] . '</p>';

foreach ($array as $value) {
	// do something with $value
};



?>

</body>
</html>