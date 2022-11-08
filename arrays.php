<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP arrays</title>
</head>
<body>
    
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".", "<br/>";
echo count($cars), "<br/>";
sort($cars);

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.", "<br/>";

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


$carsData = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $carsData[0][0].": In stock: ".$carsData[0][1].", sold: ".$carsData[0][2].".<br>";
echo $carsData[1][0].": In stock: ".$carsData[1][1].", sold: ".$carsData[1][2].".<br>";
echo $carsData[2][0].": In stock: ".$carsData[2][1].", sold: ".$carsData[2][2].".<br>";
echo $carsData[3][0].": In stock: ".$carsData[3][1].", sold: ".$carsData[3][2].".<br>";


for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$carsData[$row][$col]."</li>";
  }
  echo "</ul>";
}


$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
foreach($numbers as $number){echo $number, "<br/>";};
rsort($numbers);
foreach($numbers as $number){echo $number, "<br/>";};

asort($age);
foreach($age as $x => $x_value){echo "key =" . $x . ", value=" . $x_value, "<br/>";};
ksort($age);
foreach($age as $x => $x_value){echo "key =" . $x . ", value=" . $x_value, "<br/>";};
arsort($age);
foreach($age as $x => $x_value){echo "key =" . $x . ", value=" . $x_value, "<br/>";};
krsort($age);
foreach($age as $x => $x_value){echo "key =" . $x . ", value=" . $x_value, "<br/>";};
?>
</body>
</html>