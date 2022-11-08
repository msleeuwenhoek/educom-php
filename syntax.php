<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>PHP syntax</title>
</head>
<body>
    <h1>My first PHP page</h1>

     <?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?> 



 <?php
function myTest2() {
  $y = 5; // local scope
  echo "<p>Variable y inside function is: $y</p>";
}
myTest2();

// using x outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";
?> 

 <?php
$z = 5;
$p = 10;

function myTest3() {
  global $z, $p;
  $p = $z + $p;
}

myTest3();
echo $p; // outputs 15
?> 



<br/>

 <?php
function myTest4() {
  static $s = 0;
  echo $s;
  $s++;
}

myTest4();
myTest4();
myTest4();
?> 
   
</body>
</html>