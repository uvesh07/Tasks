<!DOCTYPE html>
<html lang="en">
<head>
    <title>Programe 13</title>

<?php
    if(isset($_GET['btn'])){
        prime();
    }
        function prime(){
            $num = $_GET['num'];

            $flag = 0;

            for($i=2;$i<$num;$i++){
                if($num%$i == 0){
                    $flag = 1;
                }
            }

            if($flag == 1){
                echo "The number is not prime..";
            }

            else{
                echo "The number is prime..";
            }
        }

?>
</head>
<body>
    
    <h1>Read a number and check whether it is prime or not.(using for loop)(can be div
        by 2)</h1>
<form action="" method="get">
    <label for="">Enter Number :</label> <input type="number" name="num" id="num"> <br>
    <button name="btn" onclick="prime()">Submit</button>
</form>

</body>
</html>