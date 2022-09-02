<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 9</title>
</head>
<body>
    
    <h1>Program to input three 1 -digit numbers and form a new 3-digit number.</h1>
<form action="" method="get">
    <label for="">Enter first digit :</label><input type="number" name="first"> <br>
    <label for="">Enter second digit :</label><input type="number" name="second"> <br>
    <label for="">Enter third digit :</label><input type="number" name="third"> <br>

        <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

        $first = intval($_GET['first']);
        $second = intval($_GET['second']);
        $third = intval($_GET['third']);

        $a =  intval($first*10 + $second);
        $final = intval($a*10 + $third);

        echo "The final number is : " . $final;
?>

</body>
</html>