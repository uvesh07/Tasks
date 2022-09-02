<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 10</title>
</head>
<body>
    
    <h1>Program to input a 4-digit number and print its entire digits individual.</h1>
<form action="" method="get">
    <label for="">Eneter Four digit number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

        $num = intval($_GET['num']);

        $forth = intval($num%10);
        $num  = intval($num/10);
        $thi = intval($num%10);
        $num  = intval($num/10);
        $sec = intval($num%10);
        $num  = intval($num/10);
        $fir = intval($num%10);
        $num = intval($num/10);

        echo "First : " . $fir . "<br> Second : " . $sec . "<br> Third : " . $thi . "<br> Fourth : " . $forth;
?>
</body>
</html>