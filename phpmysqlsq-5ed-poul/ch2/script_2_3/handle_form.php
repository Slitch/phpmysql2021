<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php
# PHP and MySQL 5th Edition - Larry Ullman
# ISBN-13: 978-0-13-430184-6
# Date: June 13, 2021
# Creatd by Poul Lynge Larsen
# handle_feedback.php
# Handling input from form.html

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

// if (isset($_REQUEST['gender'])) {
// 	$gender = $_REQUEST['gender'];
// } else {
// 	$gender = NULL;
// }
// The NULL Coalescing Operator
// * If your using PHP 7 or later, change some of the conditionals to use the NULL coalescing operator instead.
$gender = $_REQUEST['gender'] ?? NULL;


// Print the submitted information:
echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email</em></p>\n";

if ($gender == 'M') {
	echo '<p><strong>Good day, Sir!</strong></p>';
} elseif ($gender == 'M') {
	echo '<p><srong>Good day, Maddam!</strong></p>';
} else { // No gender selected.
	echo '<p><strong>You forgot to enter your gender!</strong></p>';
}

?>


</body>
</html>