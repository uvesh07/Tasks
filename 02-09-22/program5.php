<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 5</title>
</head>
<body>
    
    <h1>Program to calculate the perimeter and area of a triangle when sides are given.</h1>
<form method="get">
    <label for="">Enetr first side : </label><input type="number" name="first"> <br>
    <label for="">Enetr Second side : </label><input type="number" name="second"> <br>
    <label for="">Enetr Third side : </label><input type="number" name="third"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

        $side1 = intval($_GET['first']);
        $side2 = intval($_GET['second']);
        $side3 = intval($_GET['third']);

        $peri = intval($side1+$side2+$side3);

        $s = floatval($peri/2);

        $area = floatval(sqrt($s*($s-$side1)*($s-$side2)*($s-$side3)));

        echo "The area of Triangle is : " . $area;
?>
</body>
</html>