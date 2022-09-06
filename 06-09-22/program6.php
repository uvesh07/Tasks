<html>
<head>
<title>program 6</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and count total no. of +ve, -ve and zero eliments.</h2>

<?php
    $arr = array(-100,-50,0,400,15,80);
    $len = count($arr);
    $pos = 0;
    $neg = 0;
    $zero = 0;
    // echo "Before Reverse : <br>";


    for($i = 0;$i<$len;$i++){
        if($arr[$i]>0){
            $pos++;
        }
        elseif($arr[$i]<0){
            $neg++;
        }
        else{
            $zero++;
        }
    }

    echo "positive elements are : " . $pos . 
    "<br> negative elements are : " . $neg . 
    "<br> Zero elements are : " . $zero;
?>
</body>
</html>