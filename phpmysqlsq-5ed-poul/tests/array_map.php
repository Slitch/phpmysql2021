<?php
// array_map — Applies the callback to the elements of the given arrays
https://www.php.net/manual/en/function.array-map.php

function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
// 1 * 1 * 1 = 1
// 2 * 2 * 2 = 8
// 3 * 3 * 3 = 27
// 4 * 4 * 4 = 64
// 5 * 5 * 5 = 125

echo '<pre>';
print_r($b);
echo '</pre>';



?>