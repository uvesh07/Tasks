<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 13</title>
</head>
<body>

    <h1>Program to check whether a number is Even or Odd.</h1>
<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

        $num = intval($_GET['num']);

        if($num%2 == 0){
            echo "The number is Even..";
        }
        else{
            echo "The number is Odd..";
        }
?>
</body>
</html>