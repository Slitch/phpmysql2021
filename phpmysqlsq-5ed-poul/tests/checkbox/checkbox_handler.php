<?php include 'header.php';
# Pursue from page 74.
# Created by Poul Lynge Larsen.
# Date: June 20, 2021.
?>

<h1>Week</h1>
<p class="fs-5 col-md-8">Here is your result.</p>

<?php 

# * Create a form that contains a selectmenu or series of check boxes that allow for multiple sections.
#   Then, in the handling PHP script, display the selected items along with a count of howe many the user selected.
#   Done.

# * For added complexity, take the suggested PHP you just created
#   (that handles multiple selections), and have it display the selections
#   in alphabetical order.
#   

// Check each day
echo "<p>Here is a list of the days you selected.</p>";
if ( isset($_POST['monday']) && ($_POST['monday'] == 'monday') ) {
    $array_day[] = $_POST['monday'];
    echo "<p>Monday.</p>\n";
} else {
    $_POST['monday'] = NULL;
    $array_day[] = FALSE;
}
if ( isset($_POST['tuesday']) && ($_POST['tuesday'] == 'tuesday') ) {
    $array_day[] = $_POST['tuesday'];
    echo "<p>Tuesday.</p>";
} else {
    $_POST['tuesday'] = NULL; 
    $array_day[] = FALSE;
}
if ( isset($_POST['wednesday']) && ($_POST['wednesday'] == 'wednesday') ) {
    $array_day[] = $_POST['wednesday'];
    echo "<p>Wednesday.</p>";
} else {
    $_POST['wednesday'] = NULL; 
    $array_day[] = FALSE;
}
if ( isset($_POST['thursday']) && ($_POST['thursday'] == 'thursday') ) {
    $array_day[] = $_POST['thursday'];
    echo "<p>Thursday.</p>";
} else {
    $_POST['thursday'] = NULL; 
    $array_day[] = FALSE;
}
if ( isset($_POST['friday']) && ($_POST['friday'] == 'friday') ) {
    $array_day[] = $_POST['friday'];
    echo "<p>Friday.</p>";
} else {
    $_POST['friday'] = NULL; 
    $array_day[] = FALSE;
}
if ( isset($_POST['saturday']) && ($_POST['saturday'] == 'saturday') ) {
    $array_day[] = $_POST['saturday'];
    echo "<p>Saturday</p>";
} else {
    $_POST['saturday'] = NULL; 
    $array_day[] = FALSE;
}
if ( isset($_POST['sunday']) && ($_POST['sunday'] == 'sunday') ) {
    $array_day[] = $_POST['sunday'];
    echo "<p>Sunday</p>";
} else {
    $_POST['sunday'] = NULL; 
    $array_day[] = FALSE;
}

// Print_r the array of days even if they are NULL and FALSE
if (isset($array_day)) {
    echo '<pre>'; print_r($array_day); echo '</pre>';
} else {
    echo 'Go back and select a day';
}

// Count selected days
$array_counter = 0;
foreach($array_day as $x => $val) {
  if (!$val == FALSE) {
       $array_counter++;
  }
}

// Print number of selected days
echo '<p>Days sorted alphabetically</p>' . "\n";
asort($array_day);
foreach ($array_day as $key => $val) {
    if (!$val == FALSE) {
        echo '<p>'. ucfirst($val) . '</p>' . "\n";
        // echo "<p>ucfirst($val)</p>\n";
    }
}

?>

<div class="mb-5">
    <a href="checkbox_form.php" class="my-3 btn btn-primary btn-lg px-4" type="submit" name="submit">Go back to week chooser</a>
</div>

<?php include 'footer.php';?>