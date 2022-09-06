<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 8</title>
</head>
<body>

    <h1>Program to find an element in the Array (Linear Searching).</h1>
<form action="" method="get">
    <label for="">Enter the number you want to search : </label> <input type="number" name="num"> <br>

    <input type="submit" name="btn">
</form>

<?php
    if(isset($_GET['btn'])){
        $a = array(10,20,30,40,50,60,70,80,90,100);
        $num = $_GET['num'];
        $flag = 0;
        for($i=0;$i<count($a);$i++){
            if($a[$i] == $num){
                echo "Your number is found at index : " . ($i+1);
                $flag = 1;
                break;
            }
        }

        if($flag == 0){
            echo "Sorry! your number not found.";
        }
    }
?>
</body>
</html>