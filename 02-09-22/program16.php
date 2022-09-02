<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 16</title>
</head>
<body>
    
    <h1>Program to check whether a number is a 4-digit number or not.</h1>
<form action="" method="get">
    <label for="">Enter a number : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

      $num = intval($_GET['num']);
      $count = 0;
      while($num>0){
          $num = Intval($num/10);
          $count = $count+1;
      }

      if($count == 4){
          echo "The number has 4 digits..";
      }
      else{
          echo "The number has not 4 digits..";
      }
?>
</body>
</html>