<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 10</title>

  <?php

if(isset($_GET['btn'])){
    max3();
}
        function max3(){
            

            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $n3 = $_GET['n3'];

            if($n1>$n2 && $n1>$n3){
                echo "The max number is N1:" . $n1;
            }

            elseif($n2>$n1 && $n2>$n2){
                echo "The max number is N2:" . $n2;
            }

            else{
                echo "The max number is N3:" . $n3;
            }
        }
    ?>
</head>
<body>
    
    <h1>Read three numbers and find out maximum.</h1>
    <form action="" method="get">
        <label for="">Enter Number 1: </label> <input type="number" name="n1" id="n1" placeholder="Enter number "> <br>
        <label for="">Enter Number 2: </label> <input type="number" name="n2" id="n2" placeholder="Enter number "> <br>
        <label for="">Enter Number 3: </label> <input type="number" name="n3" id="n3" placeholder="Enter number "> <br>
        <button name="btn" onclick="max3()">Submit</button>
    </form>
</body>
</html>