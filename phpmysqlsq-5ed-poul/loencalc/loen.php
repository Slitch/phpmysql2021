<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8">
<title>Simple HTML Form</title>
<style type="number/css">
label {
font-weight: bold;
color: #300ACC;
}
</style>
</head>
<body>
<?php
// HELP! ---- http://www.learningaboutelectronics.com/Articles/How-to-perform-number-validation-in-PHP.php

// Validation
if (

  isset($_POST['bruttoloen']) && is_numeric($_POST['bruttoloen']) &&
  isset($_POST['fradrag']) && is_numeric($_POST['fradrag']) &&
  isset($_POST['am_bidrag_pro']) && is_numeric($_POST['am_bidrag_pro']) &&
  isset($_POST['am_pension_pro']) && is_numeric($_POST['am_pension_pro']) &&
  isset($_POST['atp_pension_pro']) && is_numeric($_POST['atp_pension_pro']) &&
  isset($_POST['traekprocent']) && is_numeric($_POST['traekprocent'])

) {

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

  // Print all input and the result
  echo "<p>Bruttoloen $bruttoloen</p>";
  echo "<p>Fradrag $fradrag</p>";
  echo "<p>AM bidrag $am_bidrag_pro</p>";
  echo "<p>AM pension $am_pension_pro</p>";
  echo "<p>ATP $atp_pension_pro</p>";
  echo "<p>Traekprocent $traekprocent</p>";
  echo "<p>Løn til udbetaling: $resultat Kr.</p>";

} else {

  echo '<p>Please go back and fill out the form again.</p>';

}

 ?>

<form action="loenform_handler.php" method="post">

<table>
<tr>
<td><label for="input_bruttoloen">Bruttoløn :</label></td>
<td><input type="number" name="input_bruttoloen" value=""> Kr.</td>
</tr>
<tr>
<td><label for="input_fradrag">Fradrag :</label></td>
<td><input type="number" name="input_fradrag" value=""> Kr.</td>
</tr>
<tr>
<td><label for="input_am_bidrag_pro"><abbr title="Arbejdsmarkedets">AM</abbr> bidrag :</label></td>
<td><input type="number" name="input_am_bidrag_pro" value="8"> %</td>
</tr>
<tr>
<td><label for="input_am_pension_pro"><abbr title="Arbejdsmarkedets">AM</abbr> pension :</label></td>
<td><input type="number" name="input_am_pension_pro" value="4"> %</td>
</tr>
<tr>
<td><label for="input_atp_pension"><abbr title="Arbejdsmarkedets Tillægs Pension">ATP</abbr> pension :</label></td>
<td><input type="number" name="input_atp_pension" value="90"> Kr.</td>
</tr>
<tr>
<td><label for="input_traekprocent">Trækprocent :</label></td>
<td><input type="number" name="input_traekprocent" value="37"> %</td>
</tr>
</table>
<input type="submit" name="submit" value="Udregn min løb">

</form>

</body>
</html>