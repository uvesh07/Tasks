<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 12</title>
</head>
<body>
    
    <h1>Program to print the sum of all digits of a 4-digit number.</h1>
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

        $sum = intval($fir + $sec + $thi + $forth);

        echo "The funal sum of given number's individual digit is : " . $sum;
    ?>
</body>
</html>