<?php
# crates by Poul Lynge Larsen
# Date: June 20, 2021
# Book: PHP and MySQL for Dynamic Web Sites Fifth Edition
# Pursue page 74
// Printing the same array in different ways using:
// array_map and aray_splice


// Original Array
$a = [
	0 => 1,
	1 => 2,
	2 => 3,
	3 => 4,
	4 => 5,
	5 => 6,
	6 => 7,
	7 => 8,
	8 => 9,
	9 => 10,
];
echo '<h1>Original array a</h1>';
echo '<h2>All Arrayss are from the first Original Array</h2>';
echo '<pre>'; print_r($a);echo '</pre>';

// Array Map
echo '<p>Array Map</p>';
function cube($n)
{
    return ($n * $n * $n);
}
$b = array_map('cube', $a);
// 1 * 1 * 1 = 1
// 2 * 2 * 2 = 8
// 3 * 3 * 3 = 27
// 4 * 4 * 4 = 64
// 5 * 5 * 5 = 125
//.....
echo '<pre>'; print_r($b); echo '</pre>';

// Array Splice - Prepare variables to reuse the original array
echo '<h1>array splice</h1>';
$d = $a;
$d1 = $a;
$d2 = $a;
$d3 = $a;
$d4 = $a;

echo "<p>Array d1 (Original Araay)<p>";
echo '<pre>'; print_r($d); echo '</pre>';

echo "<p>Display only the first two elements<p>";
array_splice($d1, 2);
echo '<pre>'; print_r($d1); echo '</pre>';

echo "<p>Split after [0] and replance value of key [1] with value of key [9] <p>";
array_splice($d2, 1, -1);
echo '<pre>'; print_r($d2); echo '</pre>';

echo '<p><b>Tip</b> To remove everything from <b>offset</b> to the end of the array when <b>replacement</b> is also specified, use count($input) for <b>length</b>.<p>';
array_splice($d3, 1, count($d3), "orange");
echo '<pre>'; print_r($d3); echo '</pre>';

echo "<p>Last to values have been replaced";
array_splice($d4, -1, 1, array("black", "maroon"));
echo '<pre>'; print_r($d4); echo '</pre>';

?>