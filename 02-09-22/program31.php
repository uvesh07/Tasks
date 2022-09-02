<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 31</title>
</head>
<body>
    
    <h1>Program to print the series 2, 4, 6, 8, .. ..n.</h1>

<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

     $n = intval($_GET['num']);
    
     for($i=1;$i<=$n;$i++){
         if($i%2 == 0){
             echo "Number : ". $i ."<br>";
         }
         else{
             
         }
     }
?>
</body>
</html>