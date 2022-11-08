<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP functions</title>
</head>
<body>
<?php
function writeMsg() {
  echo "Hello world!<br/>";
}

writeMsg(); // call the function


function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


function familyData($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyData("Hege", "1975");
familyData("Stale", "1978");
familyData("Kai Jim", "1983");





echo "<br/>";

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

echo "<br/>";

function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo "<br/>";


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

?> 


</body>
</html>