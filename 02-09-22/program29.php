<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 29</title>
</head>
<body>
    
    <h1>Program to print the table for any number (x).</h1>
<form action="" method="get">
    <label for="">Enter number :</label> <input type="number" name="num"> <br>
        <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

if(isset($_GET['btn'])){
     $n = intval($_GET['num']);
     for($i=1;$i<=10;$i++){
         echo $n ." * " . $i ." = ". ($n*$i) ."<br>";
     }
}     
?>
</body>
</html>