<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);


// READ ME: https://www.php.net/manual/en/function.print-r.php
echo '<pre>', print_r($flipped,true), '</pre>';

// echo "<pre>"; 
// print_r($flipped); 
// echo "</pre>";
?>
<!-- <pre><?php // print_r($flipped) ?></pre> -->