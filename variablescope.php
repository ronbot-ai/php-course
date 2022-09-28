<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


function mylocalvar() {
  $y = 5; // local scope
  echo "<p>Variable y inside function is: $x</p>";
}
mylocalvar();

// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";

// Static keyword 
function myStaticTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myStaticTest();
myStaticTest();
myStaticTest();
?>
