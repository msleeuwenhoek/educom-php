<?php declare(strict_types=1);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

echo "<br/>";


function addNumbers2(float $a, float $b) : int {
  return $a + $b;
}
echo addNumbers2(1.2, 5.2); 
?> 

