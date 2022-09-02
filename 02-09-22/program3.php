<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 3</title>
</head>
<body>

<h1>Program to calculate the area of a square while the perimeter is given.</h1>
<form method="get">
    <label for="">Enetr perimeter :</label><input type="number" name="peri"> <br>
    <input type="submit" name="btn">
</form>

<?php

    error_reporting(0);

       $peri = $_GET['peri'];

       $side = floatval($peri/4);

       $area = floatval($side * 2);

       echo "The area is : " . $area;

?>
</body>
</html>