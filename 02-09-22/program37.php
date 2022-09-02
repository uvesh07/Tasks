<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 37</title>
</head>
<body>
    
    <h1>Program to compute Square root using Iteration (without using sqrt( ) library function).</h1>
<form action="" method="get">
    <label for="">Enter Number : </label><input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php
            if(isset($_GET['btn'])){

             $n = intval($_GET['num']);
 
             $sqrt = intval($n/2);
             $temp = 0;
 
             while($sqrt != $temp){
                 $temp = $sqrt;
 
                 $sqrt = ((($n/$temp)+$temp)/2);
             }
 
             echo "The SQRT is : " . $sqrt;
            }
?>
</body>
</html>