<?php 

# Write your own function
function is_palindrome($string) {
	$string = strtolower($string);
	$string = str_replace(' ', '', $string);

	$pal_check = ($string == strrev($string));
	return $pal_check;
}
$check_string = 'Race Car';
if (is_palindrome($check_string)) {
	echo "<p>$check_string is a palindrome</p>";
} else {
	echo "<p>$check_string is not a palindrome!.</p>";
}



// Check if a word is a palidrome!
// x = palidrome

$check_s = 'Race Car';
function x($s) {
	$s = str_replace(' ', '', strtolower($s));
	return ($s == strrev($s));
}
// if (x($check_s)) {
// 	echo "<p>$check_s is a palindrome</p>";
// } else {
// 	echo "<p>$check_s is not a palindrome!.</p>";
// }
(x($check_s)) ? '<p>is a palindrome</p>' : '<p> is not a palindrome!.</p>';
 ?>