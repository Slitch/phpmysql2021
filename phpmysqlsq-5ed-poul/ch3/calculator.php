<?php 
# from Poul Lynge Larsen # Script 3.10 - calculator.php #5 (modified by pursue)
# Pursue page 112
/*================================================================
|
|   ✅ PURSUE 3. Change calculator.php so that it uses 
|   a constant in lieu of hard-coded average speed 65.
|   (As written, the average speed is a "magic number"
|   -a value used in a script without explanation.)
|
|   ✅ PERSUE 4. Better yet, modify calculator.php so that 
|   the user can enter average speed or 
|   select it from a list of options.
|
|   ✅ PERSUE 5. Update the output of calculator.php so that 
|   it displays the number of days and hours the trip will take 
|   when the number of hours is greather than 24.
|
|   ✅ PERSUE 6. As a more advanced trick, rewrite calculator.php 
|   so that the create_radio() function call is in the script 
|   only once but still creates three radio buttons. 
|   Hint: Use loop.
|
|   ✅ PERSUE 7. If you'r using PHP 7 or greater, 
|   update the function definitions to 
|   use parameter and return type declorations. 
|   (See the "PHP 7 New Functions Features" 
|   sidebar and PHP manual for details.)
|
|=============================================================*/

 ?>
<?php
# PURSUE 3.
// define('MAGIC_NUMBER', 65);

// prepare variables:
$mph = 
$distance = 
$efficiency = 
$gallon_price = 
$days = "";

// Headers information 
$page_title = 'Trip Cost Calculator'; 
include('include/header.html');

// This function creates a radio button.
// The function takes two arguments: the value and the name.
// The function also makes the button "sticky".
function create_radio(string $value, $name = 'gallon_price') {

	// Start the element:
	echo '<input type="radio" name="' . $name .'" id="' . $value . '" value="' . $value . '"';

	// Check for stickiness:
	if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
		echo ' checked="checked"';
	}

	// Complete the element:
	echo "> <label for=\"$value\"> $value </label> ";


} // END OF create_gallon_radio() function.

// This function calculates the cost of the trip.
// The function takes three arguments: 
// the distance, the fuel efficiency, and the price per gallon.
// The function returns the total cost.
function calculate_trip_cost($miles, $mpg, $ppg) 
{
	// Get the number of gallons:
	$gallons = $miles/$mpg;

	// Get the cost of those gallons:
	$dollars = $gallons * $ppg;

	// Return the formatted cost:
	return number_format($dollars, 2);

} // END OF calculate_trip_cost() function.

// Function convert hours to days, remaining hours and remaining minutes.
function func_time(float $total_hours): string {

	// Calculating days, remaining hours and remaining minues.
	$days 				= $total_hours / 24;
	$hours_left 	= fmod($total_hours, 24);
	$minutes_left	= fmod(($hours_left * 60), 60);

	// floor numbers to look nice
	$f_d 					= floor($days);
	$f_h_left 		= floor($hours_left);
	$f_m_left 		= floor($minutes_left);

	$res = "<strong>$f_d day(s), $f_h_left hour(s), and $f_m_left minute(s)</strong>";

	return $res;

} // END OF func_time() function.

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	# PERSUE 4. - Look for $_POST['mph'] and $mph 

	// Minimal form validation:
	if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'], $_POST['mph'] ) && 
	 is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) && is_numeric($_POST['mph']) ) {

	 	$distance = $_POST['distance'];
	 	$efficiency = $_POST['efficiency'];
	 	$mph = $_POST['mph'];
	 	$gallon_price = $_POST['gallon_price'];

		// Calculate the results:
		$cost = calculate_trip_cost($distance, $efficiency, $gallon_price);
		
		// check if input is not 0
		if ( ($distance > 0) && ($mph > 0) ) {
			$hours = $distance / $mph;

			// Print the results:
			echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
			<p>The total cost of driving ' . $distance . ' miles, averaging ' . $efficiency . ' miles per gallon, and paying an average of $' . $gallon_price . ' per gallon, is $' . $cost . '. If you drive at an average of ' . $mph . ' miles per hour, the trip will take approximately ' . func_time($hours) . '</p>';
		} else {
			echo '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger"><b>Setitng Distance to 0 or Average Mph to 0 wont work.</b></p>';

		}// END OF check if input is not 0

	} else { // Invalid submitted values.
		echo '<div class="page-header"><h1>Error!</h1></div>
		<p class="text-danger">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
	}
	
} // END OF main submission IF.

// Leave the PHP section and create the HTML form:
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
	<p><label for="distance">Distance (in miles): </label><input type="text" name="distance" id="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"></p>
	<?php # PURSUE 3. ?>
	<p><label for="mph">Average <abbr title="Miles per hour">Mph</abbr></label>: <input type="text" name="mph" id="mph" value="<?php if (isset($_POST['mph'])) echo $_POST['mph']; ?>"></p>
	<p>Ave. Price Per Gallon:
	<?php 
	// PURSUE 6 - the create_radio( ) function call is only in the script once
	// Step 1: create an array to hold the three/four/... radio button values:
	$radio_values = array('3.00', '3.50', '4.00', '5.00');

	// Step 2: use a foreach loop to loop through the array:
	foreach ($radio_values as $radio_value) {
	    create_radio($radio_value);
	}
	?>
	</p>
	<p><label for="fuel">Fuel Efficiency: </label><select id="fuel" name="efficiency">
		<option value="10"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) echo ' selected="selected"'; ?>>Terrible</option>
		<option value="20"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) echo ' selected="selected"'; ?>>Decent</option>
		<option value="30"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) echo ' selected="selected"'; ?>>Very Good</option>
		<option value="50"<?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) echo ' selected="selected"'; ?>>Outstanding</option>
	</select></p>
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('include/footer.html'); ?>