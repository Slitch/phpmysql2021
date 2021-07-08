<?php 
$x = '';
var_dump(isset($x));

echo '<br>';

$y = 'poul';
var_dump(empty($y));


$array = array("foo", "bar", "hello", "world");
// var_dump($array);
// echo '<pre>';
// print_r($array);
// echo '</pre>';

echo "<pre>", print_r($array), "</pre>";

?>

$array = array(
    "foo" => "bar",
    "foobar" => "barfoo"
);

$arrayVariable = array(
    key1  => value1,
    key2 => value2,
    key3 => value3,
    ...
    keyN => valueN,
);