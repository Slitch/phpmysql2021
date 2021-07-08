<?php 

// Testing if and associative array can be accessed through indexed number
$a = 'her er nummer 0';
$b = 'her er nummer 1';
$c = 'her er nummer 2';
$d = 'her er nummer 4';

$arrayName = array(
	'num0' => $a, 
	'num1' => $b, 
	'num2' => $c, 
	'num3' => $d
);

// echo $arrayName[0]; // BAD!
echo $arrayName['num0']; // GOOD!
echo '<br>';


###################
// Print an individual indexed array item in different ways
$y = ['Bob', 'Charlie', 'John', 'Joey'];
echo $y[0];
echo '<br>';

$limit = 0;
for($x = 0; $x <= $limit; $x++) {
  echo $y[$x];
  echo '<br>';
}

$z = [ ['Janet', 'Maria', 'Christina'], ['Martin', 'Bryan', 'Kenneth'] ];
echo $z[1][1]; 
echo '<br>';

$a = [3 => 'Q3', 'Q4', 'Q5'];
echo $a[4];
echo '<br>';

$b = array(1 => 'item1', 'item2', 'item3', 'item4');
echo $b[2];
echo '<br>';

$ten = range(1, 3);

echo $ten[0];
echo '<br>';

// Print an associative array item in different ways
// https://www.php.net/manual/en/language.types.array.php // Example #7 Accessing array elements
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
echo '<pre>', var_dump($array["foo"]), '</pre>';
echo '<pre>', var_dump($array[42]), '</pre>';
echo '<pre>', var_dump($array["multi"]["dimensional"]["array"]), '</pre>';

// count() function

$g[0] = 1;
$g[1] = 3;
$g[2] = 5;
$g[3] = 10;
var_dump(count($g));

$h[0]  = 7;
$h[5]  = 9;
$h[10] = 11;
var_dump(count($h));
echo "<br>\n";

$someVar = "Her is something \nwe all can relate to";
echo $someVar;
echo "<br>\n";
echo 'Her is something 
we all can relate to';
/*
while (condition) {
	// code...
}
for ($i=0; $i < ; $i++) { 
	echo "$i\n";
}
foreach ($variable as $key => $value) {
	// code...
}

foreach (iterable_expression as $value)
    statement
foreach (iterable_expression as $key => $value)
    statement
*/
?>