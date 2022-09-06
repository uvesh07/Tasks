<html>
<head>
<title>program 5</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and find out max and min.</h2>

<?php
    $arr = array(-100,-50,-13,-400,-15,-80);
    $len = count($arr);
    $max = $arr[0];
    $min = $arr[0];
    // echo "Before Reverse : <br>";


    for($i = 1;$i<$len;$i++){
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
    }

    for($i = 1;$i<$len;$i++){
        if($arr[$i] < $min){
            $min = $arr[$i];
        }
    }

    echo "Max element is : " . $max . 
    "<br> second Max element is : " . $min;
?>
</body>
</html>