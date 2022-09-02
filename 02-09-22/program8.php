<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 8</title>
</head>
<body>

    <h1>Program to convert the temperature in Celsius while temperature in Fahrenheit is given as -
        C = 5/9 * (F-32) </h1>
    
<form action="" method="get">
        <label for="">Enter temperature : </label> <input type="number" name="temp"> <br>

        <input type="submit" name="btn">
</form>

<?php

        error_reporting(0);

        $f = intval($_GET['temp']);

        $c = intval(5/9 * ($f-32));

        echo "The temprature in celcius is : " . $c . "C";


?>

</body>
</html>