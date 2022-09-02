<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 1</title>

 
</head>
<body>

    <h1>Add two numbers</h1>
<form method='get'>

    <label>Enter first number</label>  <input type="number" name="first"> <br>
    <label>Enter second number</label>  <input type="number" name="second"> <br>

        <input type="submit" name="add">
</form>    

<?php

error_reporting(0);

        $first = $_GET['first'];
        $sec = $_GET['second'];

        $res = $first + $sec;
        if(isset($_GET['add'])){
            echo "The total is : " . $res;
        }

?>
</body>
</html>