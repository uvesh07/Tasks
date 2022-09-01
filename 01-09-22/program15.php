<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 15</title>
</head>

<body>

    <h1>Read a number and sum of its digits(using while loop)</h1>

        <?php

            $val = 12345;
            $sum = 0;
            while($val){
                $sum += $val%10;
                $val = intval($val/10) ;
            }

            echo "The sum of digits : " . $sum;

        ?>
</body>

</html>