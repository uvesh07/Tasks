<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 21</title>
</head>
<body>
    
    <h1>Program to print the name of colors starting with the scanned character as- Input character Message Print. </h1>
<form action="" method="get">
    <label for="">Enter color character : </label> <input type="text" name="char"> <br>
    <input type="submit" name="btn">
</form>

<?php

    error_reporting(0);

    $char = $_GET['char'];

    if($char == "G" || $char == "g"){
        echo "Green Color";
    }
    elseif($char == "W" || $char == "w"){
        echo "White Color";
    }
    else{
        echo "Not a valid color";
    }
?>
</body>
</html>