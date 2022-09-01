<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 17</title>
</head>
<body>

    <h1>Read a number and check whether it is Perfect or not.(using for loop)</h1>
    
  <?php

        $num = 10;
        $sum = 0;
        echo "Factor of " . $num . "are (except the number itself) <br>";

        for($i=1;$i<$num;$i++){
            
            if($num%$i == 0){
                echo $i . "<br>";
                $sum = $sum + $i;
            }
        
        }
        
        if($sum == $num){
            echo "<br>" . $num . " is Perfect number";
        }
        elseif($sum != $num){
            echo "<br>" . $num . " is not Perfect number";
        }

  ?>

</body>
</html>