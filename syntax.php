<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>PHP syntax</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php 
    $txt = "text";
    echo "This is a $txt";
    ?>
    <br/>

    <?php
    echo "This is a " . $txt;
    
    ?>
    <br/>
    <?php
    $x = 5;
    $y = 7;

    echo $x + $y;
  
    
?>
   
</body>
</html>