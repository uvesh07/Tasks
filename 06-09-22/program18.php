<html>
<head>
<title>program 18</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and print sum of its individual columns.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];

$i=0;
$j=0;
for($i=0;$i<count($arr);$i++){
    $sum = 0;
        for($j=0;$j<count($arr);$j++){
            $sum += $arr[$j][$i];
        }
        echo "sum of " . $i . " columun elements => " . $sum . "<br>"; 
    }
?>
</body>
</html>