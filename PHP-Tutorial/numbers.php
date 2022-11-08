<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP numbers</title>
</head>
<body>
<?php
    $x = 5985;
    var_dump(is_int($x));

    $p = 59.85;
    var_dump(is_int($p));

    $y = 10.365;
    var_dump(is_float($y));

    $s = 1.9e411;
    var_dump($s);

    $z = acos(8);
    var_dump($z);

    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));


    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $l = "23465.768";
    $int_cast = (int)$l;
    echo $int_cast;
?>
</body>
</html>