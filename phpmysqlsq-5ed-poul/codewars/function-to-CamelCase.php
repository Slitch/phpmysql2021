<?php
// https://www.codewars.com/kata/517abf86da9663f1d2000003/train/php 
// Convert string to camel case


// Complete the method/function so that it converts dash/underscore delimited words into camel casing. 
// The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).

// Examples
// "the-stealth-warrior" gets converted to "theStealthWarrior"
// "The_Stealth_Warrior" gets converted to "TheStealthWarrior"

// Poul Solution
// $str Replace dash/underscore with space
// $str Split string into array
// $str set 
// $str Set first as a new variable

// function toCamelCase($str){

// 	// Replace dash_ with space.
// 	$str = str_replace('-', ' ', $str);

// 	// Replace underscore_ with space.
// 	$str = str_replace('_', ' ', $str);

// 	// Split each word in string into an arrray seperated by space.
// 	$x = explode(' ', $str);

// 	// For each value in array set string's first character to uppercase but skip the first index(key) array[0].
// 	foreach ($x as $k => $v) {
// 		if ($k < 1) continue;
// 		$v= ucfirst($v);
// 	}
// 	// Join all array elements into one string.
// 	$y = implode($x);
// 	echo $y;

// }
// toCamelCase('the_Stealth-Warrior_bob_Martin_ludacris');


function toCamelCase($str){

	// Replace dash_ with space.
	$str = str_replace('-', ' ', $str);
	echo $str . '<br>';
	// Replace underscore_ with space.
	$str = str_replace('_', ' ', $str);
	echo $str . '<br>';
	// Split each word in string into an arrray seperated by space.
	$x = explode(' ', $str);

	echo "<pre>";
	print_r($x);
	echo "</pre>";

	for ($i=0; $i < ; $i++) { 
		// code...
	}





	// For each value in array set string's first character to uppercase but skip the first index(key) array[0].
	foreach ($x as $k => $v) {
		if ($k < 1) continue;
		$v = ucfirst($v);
		echo "$v<br>";
	}
	echo "<pre>";
	print_r($x);
	echo "</pre>";


	// Join all array elements into one string.
	$y = implode($x);
	// echo $y;

}
toCamelCase('the_stealth_warrior');


 ?>