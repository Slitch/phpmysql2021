<?php 
// COMPARISON OPERATORS
// https://www.php.net/manual/en/language.operators.comparison.php
$a == $b	//Equal | true if $a is equal to $b after type juggling.
$a === $b 	// Identical | true if $a is equal to $b, and they are of the same type.
$a != $b	// Not equal | true if $a is not equal to $b after type juggling.
$a <> $b	// Not equal | true if $a is not equal to $b after type juggling.
$a !== $b	// Not identical | true if $a is not equal to $b, or they are not of the same type.
$a < $b		// Less than | true if $a is strictly less than $b.
$a > $b		// Greater than	| true if $a is strictly greater than $b.
$a <= $b	// Less than or equal to | true if $a is less than or equal to $b.
$a >= $b	// Greater than or equal | to	true if $a is greater than or equal to $b.
$a <=> $b	// Spaceship | An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.

// LOGICAL
// https://www.php.net/manual/en/language.operators.logical.php
$a and $b 	// And | true if both $a and $b are true.
$a or $b	// Or | true if either $a or $b is true.
$a xor $b	//Xor | true if either $a or $b is true, but not both.
! $a		// Not | |true if $a is not true.
$a && $b	// And | true if both $a and $b are true.
$a || $b	// Or | true if either $a or $b is true.

 ?>