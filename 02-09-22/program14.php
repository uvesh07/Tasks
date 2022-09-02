<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 14</title>
</head>
<body>
    
    <h1>Program to find largest / smallest number among three numbers.</h1>
<form action="" method="get">
    <label for="">Enter First number : </label><input type="number" name="num_1"> <br>
    <label for="">Enter Second number : </label><input type="number" name="num_2"> <br>
    <label for="">Enter Third number : </label><input type="number" name="num_3"> <br>

    <input type="submit" name="btn">
</form>

<?php
    error_reporting(0);

            $num1 = $_GET['num_1'];
            $num2 = $_GET['num_2'];
            $num3 = $_GET['num_3'];

            if($num1>$num2 && $num1>$num3){
                echo "The Largest number is : ".  $num1;
            }
            elseif($num2>$num1 && $num2>$num3){
                echo "The Largest number is : ". $num2;
            }
            elseif($num3>$num1 && $num3>$num2){
                echo "The Largest number is : ". $num3;
            }

            if($num1<$num2 && $num1<$num3){
                echo "<br> The Smallest number is : ". $num1;
            }
            elseif($num2<$num1 && $num2<$num3){
                echo "<br> The Smallest number is : ". $num2;
            }
            elseif($num3<$num1 && $num3<$num2){
                echo "<br> The Smallest number is : ". $num3;
            }        
?>
</body>
</html>