<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<!-- <h1 class="header center orange-text">Convert Minutes to Hours and minutes</h1> -->
			<div class="row center">
				<h5 class="header col s12">Type in minutes in number</h5>

				<form action="minutes.php" method="post">

					<div class="input-field col s12">
						<input id="input_number" type="number" data-length="10" name="minutes" value="<?php if (isset($_POST['minutes'])) echo $_POST['minutes']; ?>">
						<label for="input_number">Type minutes</label>
					</div>
					<!-- <input type="submit" name="submit" value="Calculate!" class="btn waves-effect waves-light"> -->
					<button class="waves-effect waves-light btn-large" type="submit" name="submit">Calculate<i class="material-icons right">send</i></button>

				</form>

				<?php

				// Check for form submission:
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					// Minimal form validation:
					if (isset($_POST['minutes']) && is_numeric($_POST['minutes']) ) {

						// Calculate the results:
						function convertToHoursMins($time, $format = '%d:%d') {
							if ($time < 1) {
								return;
							}
							$hours = floor($time / 60);
							$minutes = ($time % 60);
							return sprintf($format, $hours, $minutes);
						}
						// Print the results:
						echo '<h5 class="header col s12">' . convertToHoursMins($_POST['minutes'], '%d timer og %d minutter') . '</h5>';

						// Exception
						} else { // Invalid submitted values.
							echo '<div class="page-header"><h1>Error!</h1></div><p class="text-danger">Please enter a valid number</p>';
						}

					} // End of main submission IF.

					// Leave the PHP section and create the HTML form:
				?>

			</div>

			<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>

	</body>
</html>