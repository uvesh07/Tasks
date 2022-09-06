<html>
<head>
<title>program 19</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and print sum of its diagonal elements.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];

$sum = 0;
for($j=0,$i=0;$i<count($arr);$i++,$j++){
    
        
            $sum += $arr[$i][$j];
        
        
    }
    echo "sum of diagonal elements => " . $sum . "<br>"; 
?>
</body>
</html>