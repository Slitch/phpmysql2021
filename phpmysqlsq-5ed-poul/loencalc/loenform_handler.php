<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4

// HELP! ---- http://www.learningaboutelectronics.com/Articles/How-to-perform-number-validation-in-PHP.php


// Check if input is a number
if ( isset($_POST['bruttoloen']) && isset($_POST['fradrag']) && isset($_POST['am_bidrag_pro']) isset($_POST['am_pension_pro']) &&
	isset($_POST['atp_pension_pro']) &&  &&
	isset($_POST['traekprocent']) && 
) {
	// Create variables for $_POST input
	$bruttoloen			= $_POST['input_bruttoloen'];
	$fradrag 			= $_POST['input_fradrag'];
	$am_bidrag_pro 		= $_POST['input_am_bidrag_pro'];
	$am_pension_pro 	= $_POST['input_am_pension_pro'];
	$atp_pension_pro 	= $_POST['input_atp_pension'];
	$traekprocent 		= $_POST['input_traekprocent'];



    $am_pension =        ($bruttoloen / 100) * $am_pension_pro;
    $am_bidrag =         ((($bruttoloen - $atp_pension_pro) - $am_pension) / 100) * $am_bidrag_pro;
    $a_indkomst =        (($bruttoloen - $atp_pension_pro) - $am_pension) - $am_bidrag;
    $skatte_grundlag =   $a_indkomst - $fradrag;
    $skat =              ($skatte_grundlag / 100) * $traekprocent;
    $nettoloen =         $a_indkomst - $skat;
    $resultat =          number_format($nettoloen, 0, ",", ".");

    // Print all input and the result
	echo "<p>Bruttoloen $bruttoloen</p>";
	echo "<p>Fradrag $fradrag</p>";
	echo "<p>AM bidrag $am_bidrag_pro</p>";
	echo "<p>AM pension $am_pension_pro</p>";
	echo "<p>ATP $atp_pension_pro</p>";
	echo "<p>Traekprocent $traekprocent</p>";
	echo "<p>Løn til udbetaling: $resultat Kr.</p>";

} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}

?>

</body>
</html>