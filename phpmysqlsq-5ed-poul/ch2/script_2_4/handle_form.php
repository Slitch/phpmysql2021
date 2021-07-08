<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback 2.4</title>
	<style type="text/css" title="text/css" media="all">
	.error {
		font-weight: bold;
		color: #C00;
	}
</style>
</head>
<body>
<?php
# PHP and MySQL 5th Edition - Larry Ullman
# ISBN-13: 978-0-13-430184-6
# concat_city.php
# Date: June 16, 2021
# Creatd by Poul Lynge Larsen
# Validate your form - page 50:
# This document have been rewritten according to Pursue page 74. 


// Validating name
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name = NULL;
	echo '<p class="error">You fogot to enter your name!</p>';
}
// Validating email
if (!empty($_POST['email'])) {

	$email = $_POST['email'];

} else {

	$email = NULL;
	echo '<p class="error">You fogot to enter your email!</p>';

}
// Validating comments
if (!empty($_POST['comments'])) {

	$comments = $_POST['comments'];

} else {

	$comments = NULL;
	echo '<p class="error">You fogot to enter your comments!</p>';

}
// Validating gender
if (isset($_POST['gender']) && ($_POST['gender'] == 'M')) {

	$gender = $_POST['gender'];
	$greeting = '<p><b>Good day, Sir!</b></p>';

} elseif (isset($_POST['gender']) && ($_POST['gender'] == 'F')) {

	$gender = $_POST['gender']; 
	$greeting = '<p><b>Good day, Maddam!</b></p>';

} else {
	$gender = NULL;
	echo '<p class="error">You forgot to select a gender</p>';	
}
// Validating age
if (isset($_POST['age']) && ($_POST['age'] == '0-29')) {

	$age = $_POST['age'];
	$age_print = '<p><b>Age: Your age between 0-29 years.</b></p>';

} elseif (isset($_POST['age']) && ($_POST['age'] == '30-60')) {

	$age = $_POST['age']; 
	$age_print = '<p><b>Age: Your age is between 30-60 year.</b></p>';

} elseif (isset($_POST['age']) && ($_POST['age'] == '60+')) {

	$age = $_POST['age']; 
	$age_print = '<p><b>Age: Your 60 or more.</b></p>';

} else {

	$age = NULL;
	echo '<p class="error">You forgot to select a age</p>';	
	
}
If everything is OK, prnt the message:
if ($name && $email && $gender && $comments && $age) {

	echo "<p>Thank you, <strong>$name</strong> for the following comments:</p>
	<pre>$comments</pre>
	<p>$age_print</p>
	<p>We will replay to you at <em>$email</em>.</p>\n";
	
	echo $greeting;

} else {
	echo '<p class="error">Plaese go back and fill out the form again.</p>';
}

?>
</body>
</html>