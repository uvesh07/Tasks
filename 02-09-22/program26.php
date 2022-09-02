<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 26</title>
</head>

<body>

    <h1>Program to input number of the month of a year and print how many days are there in the month.</h1>
<form action="" method="get">
    <label for="">Enter month between 1 to 12 : </label> <input type="number" name="month"> <br>
    <input type="submit" name="btn">
</form>    

<?php

error_reporting(0);

                $temp = Intval($_GET['month']);
    
                switch ($temp) {
                    case 1:
                        $days = 31;
                        break;
    
                        case 2:
                        $days = 28;
                        break;
                        
                        case 3:
                        $days = 31;
                        break;
    
                        case 4:
                        $days = 30;
                        break;
    
                        case 5:
                        $days = 31;
                        break;
    
                        case 6:
                        $days = 30;
                        break;
    
                        case 7:
                        $days = 31;
                        break;
    
                        case 8:
                        $days = 31;
                        break;
    
                        case 9:
                        $days = 30;
                        break;
    
                        case 10:
                        $days = 31;
                        break;
    
                        case 11:
                        $days = 30;
                        break;
    
                        case 12:
                        $days = 31;
                        break;
    
                        default:
                            echo "Sorry you entered wrong number..";
                }
    
                echo "The days in the " . $temp . " month is : " . $days;    
?>
</body>

</html>