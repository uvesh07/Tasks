<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 14</title>


</head>

<body>

    <h1>Read a number and print its reverse.(using while loop)</h1>
<?php 
            
            $num = 1234;
            $rev = 0;

            while ($num != 0){
                $lastDigit = $num % 10;
                $rev = $rev * 10 + $lastDigit;
                $num = intval($num / 10);
            }

            echo "Reverse number : " . $rev;
    
    ?>
</body>

</html>