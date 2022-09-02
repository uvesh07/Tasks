<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 23</title>
</head>

<body>

    <h1>Program to print the name of colors starting with the scanned character as .</h1>
<form action="" method="get">
    <label for="">Enter a color character : </label> <input type="text" name="char"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

    $char = $_GET['char'];

    switch ($char) {
        case 'g':
            echo "Green color..";
            break;
        case 'G':
            echo "Green color..";
            break;
        case 'w':
            echo "White color..";
            break;
        case 'W':
            echo "White color..";
            break;
        default :
            echo "Not a valid color..";
    }
?>
</body>

</html>