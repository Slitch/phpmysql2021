<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Concatenation</title>
</head>
<body>
<?php
# Script 1.7 - predefined.php
# Creates June 13, 2021
# Creatd by Poul Lynge Larsen
# Concatenating Strings.. page 22

// Create the variables:
$first_name = 'Melissa';
$last_name = 'Bank';
// $author = $first_name . ' ' . $last_name;
// could also be written like:
// $author = "$first_name $last_name";
// or..
$author = $first_name;
$author .= ', ';
$author .= $last_name;

$book = 'The Girls\'s Guide to hunting and Fishing';

// Print the values:
echo "<p>The book <em>$book</em> was written by $author.</p>";
?>
</body>
</html>