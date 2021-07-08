<?php
// ksort — Sort an array by key in ascending order
// https://www.php.net/manual/en/function.ksort.php

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
echo "<p>Original list</p>";
echo "<ul>";
foreach ($fruits as $key => $val) {
    echo "<li>$key = $val</li>\n";
}
echo "</ul>";

ksort($fruits);
echo "<p>ksort — Sort an array by key in ascending order. </p>";
echo "<p>Sorts an array by key in ascending order, maintaining key to data correlations. This is useful mainly for associative arrays.</p>";
echo "<ul>";
foreach ($fruits as $key => $val) {
    echo "<li>$key = $val</li>\n";
}
echo "</ul>";
?>