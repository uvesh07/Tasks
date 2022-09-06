<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 9</title>
</head>

<body>

    <h1>Program to find an element in the Array (Binary Searching).</h1>
<form action="" method="get">
    <label for="">Enter the number you want to search : </label> <input type="number" name="num"> <br>
    <input type="submit" name="btn">
</form>

<?php
    if(isset($_GET['btn'])){
        $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

        $num = $_GET['num'];

        $l = 0;
        $r = intval(count($arr)-1);
        
        function bserch($arr,$l,$r,$num){

            $i =0;
            $flag = 0;

            if($r >= $l) {

                $m = round($l + ($r - $l) / 2);

                if ($arr[$m] == $num) {
                    echo "Your number is found at index :" . ($m+1);
                }

                elseif ($arr[$m] > $num) {
                    bserch($arr,$l,($m-1),$num);
                }

                elseif ($arr[$m] < $num) {
                    bserch($arr,($m+1),$r,$num);
                }

                else{
                    echo "Sorry! your number not found.";
                }
            }

        }

        bserch($arr,$l,$r,$num);
    }   
?>
</body>

</html>