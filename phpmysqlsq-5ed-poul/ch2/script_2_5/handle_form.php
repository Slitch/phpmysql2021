<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php 
# Script 2.5 - handle_form.php #4
# Rewritten from Pursue page 74
# Rewrite the echo statement in the final version of handle_form.php(Script 2.5) 
# so that it uses 
# single quotation marks and concatenation 
# instead of double quotation marks and concatenation marks. 

if ( 
	!empty($_POST['name']) && 
	!empty($_POST['comments']) && 
	!empty($_POST['email']) 
) {
	echo '<p>Thank you, <strong>' . $_POST['name'] . '</strong>, for the following comments:</p>
	<pre>'. $_POST['comments'] . '</pre>
	<p>We will replay to you at <em>' . $_POST['email'] . '</em>.</p>\n';
} else {
	echo '<p>Please go back and fill out the form again.</p>';
}

?>

</body>
</html>