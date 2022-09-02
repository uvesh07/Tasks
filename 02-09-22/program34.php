<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 34</title>
</head>
<body>
    
    <h1>Program to print the factorial of x.</h1>
<form action="" method="get">
    <label for="">Enter a number : </label><input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

    $n = intval($_GET['num']);
    $i=intval($n);
    
    while($n > 1){
        
        $i = intval($i*($n-1));
        $n--;
    }

    // for(i=n;n<0;n--){
    //     document.write("hellooooo");
    //     i = parseInt(i*n-1);
    //     // n = parseInt(n-1);
    // }
    // echo "The type : ". typeof($i). "<br>"; 
    echo "The factorial is : ". $i;
?>
</body>
</html>