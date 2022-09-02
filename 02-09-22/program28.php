<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 28</title>
</head>
<body>
    
    <h1>Program to print the counting 1,2,3,4, .................................n</h1>
<form action="" method="get">
    <label for="">Enter number :</label> <input type="number" name="num"> <br>
        <input type="submit" name="btn">
</form>

<?php

error_reporting(0);
    $n = intval($_GET['num']);
    
    for($i=1;$i<=$n;$i++){
        echo "Number : " . $i . "<br>";
    }
?>
</body>
</html>