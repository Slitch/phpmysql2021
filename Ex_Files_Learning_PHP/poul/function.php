<?php 
# Example 1
function hello_world() {
	echo "Hello, World!.";
}
echo '<p>' . hello_world() . '</p>';

# Example 2 
function hello_world2() {
	return "Hello, World! 2.";
}
echo '<p>' . hello_world2() . '</p>';

# Example 3_1
function is_bigger() {
	return 10 >= 5;
}
$bigger = is_bigger();
if ($bigger) {
	echo "<p>The function retuned true.</p>";
} else {
	echo "<p>The function returned false.</p>";
}

# Example 3_2
function is_bigger1() {
	return 10 >= 5;
}
if ( is_bigger1() ) {
	echo "<p>The function retuned true.</p>";
} else {
	echo "<p>The function returned false.</p>";
}

# Example 4
function is_bigger2($a, $b) {
	return $a >= $b;
}
$bigger1 = is_bigger2(10, 5);
echo $bigger1;





 ?>