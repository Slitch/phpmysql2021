<?php

// This function creates a radio button.
// The function takes two argument: the value and the name.
// The function also makes the button "sticky".
// function create_radio($value, $name = 'gallon_price') {

// 	// Start the element:
// 	echo '<input type="radio" name="'. $name .'" value="' . $value . '"';

// 	// Check for stickiness:
// 	if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
// 		echo ' checked="checked"';
// 	}

// 	// Complete the element:
// 	echo "> $value ";

// } // End of create_gallon_radio() function.

$page_title = 'Trip Cost Calculator'; 
include('include/header.html');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'post') {

	// Minimal form validation:
	if (isset($_POST['bruttoloen']) && is_numeric($_POST['bruttoloen']) &&
  		isset($_POST['fradrag']) && is_numeric($_POST['fradrag']) &&
  		isset($_POST['am_bidrag_pro']) && is_numeric($_POST['am_bidrag_pro']) &&
  		isset($_POST['am_pension_pro']) && is_numeric($_POST['am_pension_pro']) &&
  		isset($_POST['atp_pension_pro']) && is_numeric($_POST['atp_pension_pro']) &&
  		isset($_POST['traekprocent']) && is_numeric($_POST['traekprocent'])) {

		// Create variables for $_POST input
		$bruttoloen       = $_POST['input_bruttoloen'];
		$fradrag          = $_POST['input_fradrag'];
		$am_bidrag_pro    = $_POST['input_am_bidrag_pro'];
		$am_pension_pro   = $_POST['input_am_pension_pro'];
		$atp_pension_pro  = $_POST['input_atp_pension'];
		$traekprocent     = $_POST['input_traekprocent'];

		// Calculations
		$am_pension =        ($bruttoloen / 100) * $am_pension_pro;
		$am_bidrag =         ((($bruttoloen - $atp_pension_pro) - $am_pension) / 100) * $am_bidrag_pro;
		$a_indkomst =        (($bruttoloen - $atp_pension_pro) - $am_pension) - $am_bidrag;
		$skatte_grundlag =   $a_indkomst - $fradrag;
		$skat =              ($skatte_grundlag / 100) * $traekprocent;
		$nettoloen =         $a_indkomst - $skat;
		$resultat =          number_format($nettoloen, 0, ",", ".");

		// Print the results:
		// print result over button
		echo $resultat;

	} else { // Invalid submitted values.
		echo '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
	}
	
} // END of main submission IF.

// Leave the PHP section and create the HTML form:
?>

<div class="page-header"><h1>Loen</h1></div>

<form action="loen_self.php" method="post">

	<table>
	<tr>
	<td><label for="input_bruttoloen">Bruttoløn :</label></td>
	<td><input type="number" name="input_bruttoloen" value="<?php if (isset($_POST['input_bruttoloen'])) echo $_POST['input_bruttoloen']; ?>"> Kr.</td>
	<td><?php // message if number contain too many digits MAX 5 digits 99999 ?></td>
	</tr>
	<tr>
	<td><label for="input_fradrag">Fradrag :</label></td>
	<td><input type="number" name="input_fradrag" value="<?php if (isset($_POST['input_fradrag'])) echo $_POST['input_fradrag']; ?>"> Kr.</td>
	</tr>
	<tr>
	<td><label for="input_am_bidrag_pro"><abbr title="Arbejdsmarkedets">AM</abbr> bidrag :</label></td>
	<td><input type="number" name="input_am_bidrag_pro" value="<?php if (isset($_POST['input_am_bidrag_pro'])){echo $_POST['input_am_bidrag_pro'];}else{ echo 8;} ?>"> %</td>
	</tr>
	<tr>
	<td><label for="input_am_pension_pro"><abbr title="Arbejdsmarkedets">AM</abbr> pension :</label></td>
	<td><input type="number" name="input_am_pension_pro" value="<?php if (isset($_POST['input_am_pension_pro'])){echo $_POST['input_am_pension_pro'];}else{ echo 4;} ?>"> %</td>
	</tr>
	<tr>
	<td><label for="input_atp_pension"><abbr title="Arbejdsmarkedets Tillægs Pension">ATP</abbr> pension :</label></td>
	<td><input type="number" name="input_atp_pension" value="<?php if (isset($_POST['input_atp_pension'])){echo $_POST['input_atp_pension'];}else{ echo 90;} ?>"> Kr.</td>
	</tr>
	<tr>
	<td><label for="input_traekprocent">Trækprocent :</label></td>
	<td><input type="number" name="input_traekprocent" value="<?php if (isset($_POST['input_traekprocent'])){echo $_POST['input_traekprocent'];}else{ echo 37;} ?>"> %</td>
	</tr>
	</table>
	
<?php 
if (isset($resultat)) {
	echo $resultat;
} else {
	echo "<p></p>";
}
?>

<input type="submit" name="submit" value="Udregn min løb">

</form>

<?php include('include/footer.html'); ?>