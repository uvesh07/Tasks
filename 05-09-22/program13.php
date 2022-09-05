<html>
<head>
<title>program 12</title>
</head>
<body>
    <h1>PHP Pass an array As Reference into function : </h1>
    <?php
        function arrfunction(&$arr){
        for ($i=0;$i<5;$i++)
            $arr[$i]=$arr[$i]+10;
        }
        $arr=[1,2,3,4,5];
        echo "Before passing into function : <br>";
        
        foreach ($arr as $i)
        {
        echo $i . " <br> ";
        }
        echo "After passing into function : <br>";

        arrfunction($arr);
        foreach ($arr as $i)
        {
        echo $i . " <br> ";
        }
?>

</body>
</html>