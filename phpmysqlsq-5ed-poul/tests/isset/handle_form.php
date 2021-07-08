<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback 2.4</title>
</head>
<body>
<?php
# testing if isset($_POST['radiobutton']) can be use in a variable 

// Create variable

// Validating gender
if (isset($_POST['radiobutton']) && ($_POST['radiobutton'] == 'check')) {

	$radiobutton = $_POST['radiobutton'];
	$msg = '<p><b>Thank you for clicking the button</b></p>';

} else {

	$radiobutton = NULL;
	echo '<p class="error">You forgot to select a the button</p>';	

}
// If everything is OK, prnt the message:
if ($radiobutton) {
	
	echo $msg;

} else {
	
	echo '<p class="error">Plaese go back and click the button.</p>';

}

?>
</body>
</html>