<?php 
// Indexed array
$a = array(1,2,3,4,5,6,7,8,9,10);
echo "sum(a) = " . array_sum($a) . "<br>\n";

// My Short Version
echo "sum(x) = " . array_sum(array(1,2,3,4,5,6,7,8,9,10)) . "<br>\n";
echo "sum(y) = " . array_sum([1,2,3,4,5,6,7,8,9,10]) . "<br>\n";



// Associative arra
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "<br>\n";

// My Short Version
echo "sum(c) = " . array_sum(array("a" => 1.2, "b" => 2.3, "c" => 3.4)) . "<br>\n";
echo "sum(d) = " . array_sum(["a" => 1.2, "b" => 2.3, "c" => 3.4]) . "<br>\n";
 ?>