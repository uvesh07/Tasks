<html>
<head>
<title>program 2</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and print its reverse.</h2>

<?php
    $arr = array(10,20,30,40,50,60);
    $len = count($arr);

    echo "Before Reverse : <br>";
    for($j = 0;$j<$len;$j++){
        echo $arr[$j] . "<br>";
    }

    echo "After Reverse : <br>";
    for($p = $len-1;$p>=0;$p--){
        echo $arr[$p] . "<br>";
    }
?>
</body>
</html>