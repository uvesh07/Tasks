<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 35</title>
</head>

<body>

    <h1>Program to find largest / smallest among n numbers.</h1>
<form action="" method="get">
    <label for="">Enter values : </label><input type="number" name="num"> <br>
        <input type="submit" name="btn">
    
</form>    

<?php

if(isset($_GET['btn'])){
     $num = $_GET['num'];
     $max = 0;
     $min = 0;
     for ($i = 0; $i < $num.lenth; $i++) {
         if ($num[i] > $num[i+1]) {
             $max = $num[i];
         }
     }
     echo "max : ". $max . "<br>";

     for ($j = 0; $j < $num.lenth; $j++) {
         if ($num[$i] < $num[$i+1]) {
             $min = $num[i];
         }
     }
     echo "min : ". $min . "<br>";
    }
?>
</body>

</html>