<html>
<head>
<title>program 3</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and count total no. of even and odd eliments.</h2>

<?php
    $arr = array(10,21,13,40,15,60);
    $len = count($arr);
    $even = 0;
    $odd = 0;
    // echo "Before Reverse : <br>";


    for($j = 0;$j<$len;$j++){

        if($arr[$j]%2 == 0){
            $even++;
        }
        else{
            $odd++;
        }
    }
    echo "Even elements are : " . $even . 
    "<br> Odd elements are : " . $odd;
?>
</body>
</html>