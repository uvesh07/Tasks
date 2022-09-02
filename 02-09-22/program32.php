<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 32</title>
</head>
<body>
    
    <h1>Program to print the series 1, 4, 7, 10, 13,...............n.</h1>

<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>    

<?php

error_reporting(0);
    $n = intval($_GET['num']);
    $i = 1;

    while($i<=$n){
        echo "Number : ". $i . "<br>";
        $i = $i+3;
    }
?>
</body>
</html>