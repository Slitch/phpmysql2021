<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php
// Recievin input from form

// validating input from form
if ( 
	!empty($_POST['input_bruttoloen']) && 
	!empty($_POST['input_fradrag']) && 
	!empty($_POST['input_am_bidrag_pro']) && 
	!empty($_POST['input_am_pension_pro']) && 
	!empty($_POST['input_atp_pension']) && 
	!empty($_POST['input_traekprocent']) ) 
{
	echo "<p><strong>{$_POST['input_bruttoloen']}</strong></p>";
	echo "<p><strong>{$_POST['input_fradrag']}</strong></p>";
	echo "<p><strong>{$_POST['input_am_bidrag_pro']}</strong></p>";
	echo "<p><strong>{$_POST['input_am_pension_pro']}</strong></p>";
	echo "<p><strong>{$_POST['input_atp_pension']}</strong></p>";
	echo "<p><strong>{$_POST['input_traekprocent']}</strong></p>";
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}

?>

</body>
</html>