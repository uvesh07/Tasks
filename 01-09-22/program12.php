<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 12</title>

</head>

<body>
    <h1>Read a number and calculate factorial.(using for loop)</h1>
<form action="" method="get">
    <label for="">Enter Number :</label> <input type="number" name="num" id="num"> <br>
    <button name="btn" onclick="factorial()">Submit</button>
</form>


<?php
    if(isset($_GET['btn'])){
        factorial();
    }
        function factorial() {
            $num = $_GET['num'];

            $fact= 1;

            for ($i=1;$i<=$num;$i++) {
                $fact = $fact * $i;
            }

            echo "The factorial of ". $num . " is " . intval($fact);
            
        }
    ?>
</body>

</html>