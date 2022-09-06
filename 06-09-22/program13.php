<html>
<head>
<title>program 13</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and print sum of elements stored at even indexes.</h2>

<?php
$arr = array(10,20,30,40,50,60,10);
$sum = 0;
for($i=0;$i<count($arr);$i+=2){
    $sum += $arr[$i];
}

echo "sum of  even index elements  is : " . $sum; 
?>
</body>
</html>