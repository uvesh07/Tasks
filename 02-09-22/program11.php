<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 11</title>
</head>
<body>
    
    <h1>Program to reverse a 4-digit number.</h1>
<form action="" method="get">
    <label for="">Eneter Four digit number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

        $num = intval($_GET['num']);

        $forth = intval($num%10);
        $num  = intval($num/10);
        $thi = intval($num%10);
        $num  = intval($num/10);
        $sec = intval($num%10);
        $num  = intval($num/10);
        $fir = intval($num%10);
        $num = intval($num/10);

        $add1 = intval($forth*10 + $thi);
        $add2 = intval($add1*10 + $sec);
        $final = intval($add2*10 + $fir);

        echo "The final reverse number is : " . $final;

?>
</body>
</html>