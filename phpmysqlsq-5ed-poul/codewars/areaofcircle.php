<?php 

// Complete the function that calculates the area of the red square, 
// when the length of the circular arc A is given as the input. 
// Return the result rounded to two decimals.


// Omkreds divideres med pi = diameter
// Diameter divider med 2 = radius


function square_area($A) {
  $A = $A * 4;
  $A = $A / pi();
  $A = $A / 2;
  $A = $A * $A;
  $A = number_format($A, 2); 
  echo $A;
}
square_area(2);


 ?>

<?php 
/*
class AreaOfASquareTest extends TestCase {
  public function testFixed() {
    $this->assertEquals(0, square_area(0));
    $this->assertEquals(1.62, square_area(2));
    $this->assertEquals(80, square_area(14.05));
  }
  public function testCustom() {
    // Add your own assertions here
  }
}
*/
 ?>