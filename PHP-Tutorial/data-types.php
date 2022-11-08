<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Data types PHP</title>
</head>
<body>
    
 <?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x, "<br>", $y, "<br/>";

$integer = 5985;
var_dump($integer);

echo "<br/>";
$float = 10.365;
var_dump($float);

echo "<br/>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br/>";

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

echo "<br/>";

$x = "Hello world!";
$x = null;
var_dump($x);
?> 
</body>
</html>