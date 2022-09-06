<html>
<head>
<title>program 4</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and find our max and second max.</h2>

<?php
    $arr = array(100,50,13,400,15,80);
    $len = count($arr);
    $max = $arr[0];
    $smax = $arr[0];
    // echo "Before Reverse : <br>";


    for($i = 1;$i<$len;$i++){
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
    }

    for($i = 0;$i<$len;$i++){
        if($arr[$i] == $max){
            continue;
        }
        elseif($arr[$i]>$smax){
            $smax = $arr[$i];
        }
    }

    echo "Max element is : " . $max . 
    "<br> second Max element is : " . $smax;
?>
</body>
</html>