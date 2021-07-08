<?php 
$text = "";
$check = "";
// Refresh page button
$refresh_page = 'http://localhost/phpmysqlvqp-5e-book-prog/phpmysqlsq-5ed-poul/ch3/pursuetemplate/sticky-clean.php';

function create_checkbox($check_value, $check_name = 'check') {

	// Start the element:
	echo '<div class="block">
	<input type="checkbox" class="larger" id="' . $check_name . '" name="' . $check_name . '" value="' . $check_value . '"';

	// Check for stickiness:
	if (isset($_POST[$check_name]) && ($_POST[$check_name] == $check_value)) {
		echo ' checked="checked"';
	}
	// Complete the element:
	echo '><label for="' . $check_name . '" title="Click her to accept your terms." >Accept terms.</label>
</div>';

} // END OF create_checkbox() function.
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	* {font-family: Georgia, serif;}
	.fontsize, input, button, textarea {font-size: 20px;}
	input.larger { width: 18px; height: 18px;}
	.block {display: block;}
</style>
</head>
<body>

<h1><a href="<?php echo $refresh_page; ?>">Sticky clean html php</a></h1>


<div class="fontsize">
	<fieldset>
		<legend>Legend:</legend>
		<?php
		if(isset($_POST['feedback']) && $_POST['feedback'] != "") {
			$text= $_POST['feedback'];
			echo '<p>'.$text.'</p>';
		}
		if (isset($_POST['check']) && $_POST['check'] != "") {
			$check = $_POST['check'];
			echo '<p>Checkbox: You accepted your terms.</p>';
		}
		?>
		<form method='POST' action='<?php echo $_SERVER['PHP_SELF'];?>' >
			<p><label for="msg">Write message her:</label></p>
			<!-- <textarea></textarea> -->
			<textarea rows="5"  cols="50" name="feedback"><?php echo $text;?></textarea>
			<?php create_checkbox('check1'); ?>
			<p><input type="submit" check_value="Submit"></p>
		</form>
	</fieldset>
</div>
<?php
error_reporting(E_ALL);
//your rest of PHP code
?>
</body>
</html>