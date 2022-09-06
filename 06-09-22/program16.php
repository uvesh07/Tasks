<html>
<head>
<title>program 16</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and print sum of its elements.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
$sum = 0;

for($i=0;$i<count($arr);$i++){

        for($j=0;$j<count($arr);$j++){
            $sum += $arr[$i][$j];
        }

    }



echo "sum of 2d array's elements is : " . $sum; 
?>
</body>
</html>