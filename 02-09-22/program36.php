<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 36</title>
</head>

<body>

    <h1>Program to print Fibonacci series.</h1>
<form action="" method="get">
    <label for="">Enter a number : </label><input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

if(isset($_GET['btn'])){
    $n = intval($_GET['num']);
    $num1 = 0;
    $num2 = 1;
    $swap = 0;

    echo $num1 . "<br>";
    echo $num2 . "<br>";
    for ($i = 0; $i <= $n; $i++) {
        $swap = intval($num1 + $num2);

        echo $swap . "<br>";

        $num1 = $num2;
        $num2 = $swap;
    }
}
?>
</body>

</html>