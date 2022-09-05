<html>
<head>
<title>program 12</title>
</head>
<body>
    <h1>PHP Average of Array Elements : </h1>
    <?php
        $scores = array(9,7,112,89,633,309);
        function average($array){
            $total = 0;
            foreach($array as $value){
            $total += $value;
            }
            return $total/count($array);
        }
        echo "Average = ", average($scores);
?>

</body>
</html>