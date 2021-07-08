<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pursue5 - Create a new script 5</title>
</head>
<body>
<?php 
# PHP and MySQL for Dynamics Web Site 5th Edition
# ISB-13: 978-0-13-430184-6
# Date Create: June 14, 2021
# Created by: Poul Lynge Larsen
# Page 34 Tip: Create a new script from scratch

# Create a new script, from scratch,
# that defines and display the values
# of some string variables. Use double
# quotation marks in the echo oor print
# statement that outputs the values. for
# added complexity, include some HTML
# in the output. Then rewrite the script
# so that it uses single quotation marks
# and concatenation instead of double
# quotation marks.

// Dating site profile
// create variables
$sex = 'Male';
$name = 'John';
$height_cm = 186;
$body = 'Fitness';
$cm = 'cm';
$height = $height_cm . ' ' . $cm . '.';
$hair_color = 'Dark Brown';
$occupation = 'Key Account Manager'; 

echo "<p><strong>$name</strong> is a <i>$sex</i>, $occupation, $height high with <strong>$hair_color</strong> hair and has a <strong>$body</strong> body.</p>";

// Then rewrite the script so that it uses single quotation marks 
// and concatenation instead of double quotation marks.
echo '<p><strong>' . $name . '</strong> is a <i>' . $sex . '</i>, ' . $occupation . ', ' . $height . ' high with <strong>' . $hair_color . '</strong> hair and has a <strong>' . $body . '</strong> body.</p>';

 ?>
</body>
</html>