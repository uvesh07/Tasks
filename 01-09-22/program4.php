<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 4</title>
</head>

<body>

    <h1>Read an amount in Rs. And find out number of 100, 50, 20, 10, 5, 2 rupee notes.</h1>

    <?php
        
        $am = 50000;

        

        $am_100 = intval($am / 100);
        // $am = $am%100;


        $am_50 = $am / 50;
        // $am = $am%50;

        $am_20 = $am / 20;
        // $am = $am%20;

        $am_10 = $am / 10;
        // $am = $am%10;

        $am_5 = $am / 5;
        // $am = $am%5;

        $am_2 = $am / 2;
        // $am = $am%2;

        echo "100 : " . $am_100 . "<br> 50 : " . $am_50 . "<br> 20 : " . $am_20 . "<br> 10 : " . $am_10 . "<br> 5 : " . $am_5 . "<br> 2 : " . $am_2 ;
    

        // $am_100 = intval($am / 100);
        // $am = $am%100;

        // $am_50 = intval($am / 50);
        // $am = $am%50;

        // $am_20 = intval($am / 20);
        // $am = $am%20;

        // $am_10 = intval($am / 10);
        // $am = $am%10;

        // $am_5 = intval($am / 5);
        // $am = $am%5;

        // $am_2 = intval($am / 2);
        // $am = $am%2;

        // echo "Number of 100 :" . $am_100 . "<br> Number of 50 :" . $am_50 + "<br> Number of 20 :" . $am_20 . "<br> Number of 10 :" . $am_10 . "<br> Number of 5 :" . $am_5 . "<br> Number of 2 :" . $am_2 ;
    
?>

</body>

</html>