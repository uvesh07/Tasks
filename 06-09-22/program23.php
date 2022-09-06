<html>
<head>
<title>program 23</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and find out maximum among each row.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];



for($i=0;$i<count($arr);$i++){
    $max=$arr[0][0];    
        for($j=0;$j<count($arr);$j++){
            if($arr[$i][$j]>$max){
                $max = $arr[$i][$j];
            }
        }
        echo "max in " . $i . " row elements => " . $max . "<br>"; 
    }
?>
</body>
</html>