<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 17</title>
</head>
<body>
    
    <h1>Program to calculate Billing amount for a telephone customer according to given slabs.</h1>
<form action="" method="get">
    <label for="">Enter bill units : </label><input type="number" name="unit"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);
$unit = intval($_GET['unit']);
$amount = 0;
$a = 0;
$fix = 100;
if($unit <= 50){
    $amount = floatval($fix);
}

elseif($unit>=51 && $unit<=100){
    $amount = floatval($fix + 1.0*($unit-50));
}

elseif($unit>=101 && $unit<=200){
    $amount = floatval($fix + 1.5*($unit-50));
}

elseif($unit>=201 && $unit<=300){
    $amount = floatval($fix + 2.0*($unit-50));
}

elseif($unit>300){
    $amount = floatval($fix + 2.5*($unit-50));
}

echo "The amount is : " + $amount;

?>
</body>
</html>