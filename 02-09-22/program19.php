<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 19</title>
</head>
<body>

    <h1>Program to check whether a number is Even or Odd. (Using ? : operator)</h1>
<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
        <input type="submit" name="btn">
</form>    

<?php

error_reporting(0);
    $num = intval($_GET['num']);
    echo $num%2==0 ? "The number is Even..":"The number is Odd..";
?>
</body>
</html>