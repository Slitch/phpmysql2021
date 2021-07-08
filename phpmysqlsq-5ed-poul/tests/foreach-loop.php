<?php
// https://www.w3schools.com/php/php_looping_foreach.asp
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>