<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 27</title>
</head>

<body>

    <h1>Program to print the day of the week when the number of day is input.</h1>
<form action="" method="get">
    <label for="">Enter day between 1 to 7 : </label> <input type="number" name="day"> <br>
    <input type="submit" name="btn">
</form>    

<?php

error_reporting(0);

    $temp = intval($_GET['day']);

    switch ($temp) {
        case 1:
            $days = "Monday";
            break;

            case 2:
            $days = "Tuesday";
            break;
            
            case 3:
            $days = "Wednesday";
            break;

            case 4:
            $days = "Thursday";
            break;

            case 5:
            $days = "Friday";
            break;

            case 6:
            $days = "Saturday";
            break;

            case 7:
            $days = "Sunday";
            break;

            default:
                echo "Sorry you entered wrong number..";
    }

    echo "<br> The days you entered is : " . $days;
?>
</body>

</html>