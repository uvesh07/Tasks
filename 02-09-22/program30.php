<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 30</title>
</head>
<body>
    
    <h1>Program to print the series 1, 3, 5, 7,............n.</h1>

    <form action="" method="get">
        <label for="">Enter a number : </label> <input type="number" name="num"> <br>
        <input type="submit" name="btn">
    </form>

    <?php

error_reporting(0);

         $n = intval($_GET['num']);
         
         if(isset($_GET['btn'])){
         for($i=1;$i<=$n;$i++){
             if($i%2 == 0){

             }
             else{
                 echo "Number : ". $i ."<br>";
             }
         }
        }
    ?>
</body>
</html>