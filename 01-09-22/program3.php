<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 3</title>
</head>
<body>

    <h1>Read number of hours, minutes, and seconds and convert them into seconds.</h1>
        <?php

               $uhr = 7;
               $umin = 30;
               $usec = 54; 
               $sec = 0;

               $sec = $usec;
               $sec = $sec + ($umin*60);
               $sec = $sec + ($uhr*3600);

               echo "The seconds are : " . intval($sec);

        ?>

</body>
</html>