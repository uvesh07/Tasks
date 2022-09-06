<html>
<head>
<title>program 7</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and count no. of eliment which are divisible by 5.</h2>

<?php
    $arr = array(100,50,12,45,15,79);
    $len = count($arr);
    $count = 0;
    // echo "Before Reverse : <br>";


    for($i = 0;$i<$len;$i++){
        if($arr[$i]%5 == 0){
            $count++;
        }
    }

    echo "Number of elements divisible by 5 are : " . $count;
?>
</body>
</html>