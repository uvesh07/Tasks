<html>
<head>
<title>program 1</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and print sum of its elements.</h2>

<?php
$arr = array(10,20,30,40,50,60);
$sum = 0;
foreach($arr as $a){
    $sum += $a;
}

echo "sum of elements is : " . $sum; 
?>
</body>
</html>