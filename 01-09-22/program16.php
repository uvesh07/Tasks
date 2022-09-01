<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 16</title>


</head>
<body>
    
<h1>Read a number and check whether its Armstrong or not.(using while loop)((Sum
of xQube)=x. like153)</h1>

<?php

$num = 154;
$temp = intval($num);
$sum = 0;
while($num > 0){
    $r = intval($num%10);
    $sum = intval($sum+($r*$r*$r));
    $num = intval($num/10);
}

if($temp == $sum){
    echo "The number is Armstrong..";
}

else{
    echo "The number is not Armstrong..";
}

?>
</body>
</html>