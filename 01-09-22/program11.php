<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 11</title>


</head>
<body>
    
    <h1>Read four numbers and find out maximum.</h1>
<form action="" method="get">
    <label>Enter Number 1: </label> <input type="number" name="n1" id="n1" placeholder="Enter number "> <br>
    <label>Enter Number 2: </label> <input type="number" name="n2" id="n2" placeholder="Enter number "> <br>
    <label>Enter Number 3: </label> <input type="number" name="n3" id="n3" placeholder="Enter number "> <br>
    <label>Enter Number 4: </label> <input type="number" name="n4" id="n4" placeholder="Enter number "> <br>
    <button name="btn" onclick="max3()">Submit</button>
</form>    

<?php

if(isset($_GET['btn'])){
    max3();
}
        function max3(){
            // var n1, n2, n3, n4, max;

            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $n3 = $_GET['n3'];
            $n4 = $_GET['n4'];

            if($n1>$n2 && $n1>$n3 && $n1>$n4){
                echo "The max number is N1:" . $n1;
            }

            elseif($n2>$n1 && $n2>$n3 && $n2>$n4){
                echo "The max number is N2:" . $n2;
            }

            elseif($n3>$n1 && $n3>$n2 && $n3>$n4){
                echo "The max number is N3:" . $n3;
            }

            else{
                echo "The max number is N4:" . $n4;
            }
        }
    ?>
</body>
</html>