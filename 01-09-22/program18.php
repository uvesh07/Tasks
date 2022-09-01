<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

    <h1>Read a number and check whether it is Palindrome or not.(using while
        loop)(121,474…)</h1>

        <?php

            $num = 615;
            $temp = $num;
            $rev = 0;
            while($temp > 0){
                $rem = intval($temp % 10);
                $rev = intval($rev * 10 + $rem);
                $temp = intval($temp / 10);
            }

            echo "Reserved number is : " . $rev . " ";

            if($num == $rev){
                echo "<br> The number is palindrome..";
            }

            else{
                echo "<br> The number is not palindrome..";
            }

        ?>
</body>

</html>