<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 6</title>
</head>
<body>
    
    <h1>Program to convert given number of days into Months & Days.</h1>
<form action="" method="get">
    <label for="">Enetr days : </label><input type="number" name="days"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

if(isset($_GET['btn'])){

        $days = floatval($_GET['days']);

        $month = intval($days/30);

        $days = floatval($days%30);

        echo "Months : " . $month . "<br> Days : " . $days;
}
?>
</body>
</html>