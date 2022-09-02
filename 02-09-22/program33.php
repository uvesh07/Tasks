<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 33</title>
</head>
<body>
    
    <h1>Program to print the series 1, 0, 1, 0, 1, 0,........................... n.</h1>
<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

       $n = intval($_GET['num']);
       
       for($i=1;$i<=$n;$i++){
           if($i%2 == 0){
               echo "Number : 0 <br>";
           }
           else{
               echo "Number : 1 <br>";
           }
       }
?>
</body>
</html>