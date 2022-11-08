<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP constants</title>
</head>
<body>
<?php

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING, "<br/>";

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0], "<br/>";

define("GREETING2", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING2;
}
 
myTest();



?>
    
</body>
</html>