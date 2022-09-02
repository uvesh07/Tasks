<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Program 7</title>
</head>
<body>

    <h1>Program to calculate the Simple Interest and Compound Interest.</h1>
<form action="" method="get">
    <label for="">Enter Amount : </label> <input type="number" name="amount"> <br>
    <label for="">Enter Rate of Interest : </label> <input type="number" name="interest"> <br>
    <label for="">Enter Tenure in years: </label> <input type="number" name="tenure"> <br>
    <label for="">Enter compounding periods : </label> <input type="number" name="compound"> <br>

    <input type="submit" name="btn">
</form>    

<?php

        if(isset($_GET['btn'])){

            $am = intval($_GET['amount']);
            $inte = intval($_GET['interest']);
            $tenu = intval($_GET['tenure']);
            $cp = intval($_GET['compound']);

            $si = intval($am*$inte*$tenu);
            $ci = floatval($am*(pow((1+$inte/$cp),($cp*$tenu))-1));

            echo "The simple Intrest is : " . $si . "<br> The compound intrest is : " . $ci;
        }

?>
</body>
</html>