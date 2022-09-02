<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 15</title>
</head>

<body>

    <h1>Program to find second largest among 3 numbers.</h1>
<form action="" method="get">
    <label for="">Enter first number : </label> <input type="number" name="num1"> <br>
    <label for="">Enter second number : </label> <input type="number" name="num2"> <br>
    <label for="">Enter third number : </label> <input type="number" name="num3"> <br>
        <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

 $num1 = intval($_GET['num1']);
 $num2 = intval($_GET['num2']);
 $num3 = intval($_GET['num3']);
 $max = 0; 
 $smax = 0;

 if ($num1 > $num2 && $num1 > $num3) {
     $max = intval($num1);
 }
 elseif ($num2 > $num1 && $num2 > $num3) {
     $max = intval($num2);
 }
 else {
     $max = intval($num3);
 }

 if ($num1 > $num2 && $num1 > $num3) {
     if ($num1 == $max) {

     }
     else {
         $smax = intval($num1);
     }
 }
 elseif ($num2 > $num1 && $num2 > $num3) {
     if ($num2 == $max) {

     }
     else {
         $smax = intval($num2);
     }
 }
 else {
     if ($num3 == $max) {

     }
     else {
         $smax = intval($num3);
     }
 }

 echo "The second Largest number is : " + $smax;
?>
</body>

</html>