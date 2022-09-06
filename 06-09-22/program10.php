<html>
<head>
<title>program 10</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read two array of same dimension and swap their elements.</h2>

<?php
    $a1 = array(10,20,30,40,50);
    $a2 = array(60,70,80,90,100);

    $len1 = count($a1);
    $len2 = count($a2);
    echo "Before Swap A1: <br>";

    for($i = 0;$i<$len1;$i++){
     echo $a1[$i] . "<br>";
    }
    
    echo "Before Swap A2: <br>";

    for($i = 0;$i<$len2;$i++){
        echo $a2[$i] . "<br>";
    }

    for($i = 0;$i<$len1;$i++){
        $new[$i] = $a1[$i]; 
    }
    for($j = 0;$j<$len2;$j++){
        $a1[$j] = $a2[$j];
    }
    for($i = 0;$i<$len1;$i++){
        $a2[$i] = $new[$i]; 
    }

    echo "After Swap A1: <br>";

    for($i = 0;$i<$len2;$i++){
     echo $a1[$i] . "<br>";
    }
    
    echo "After Swap A2: <br>";

    for($i = 0;$i<$len1;$i++){
        echo $a2[$i] . "<br>";
    }
?>
</body>
</html>