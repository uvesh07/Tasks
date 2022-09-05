<html>
<head>
<title>program 3</title>
</head>
<body>
    <h1>PHP Call by Reference function : </h1>
    <?php  
        function increment(&$i)  
        {  
            $i++;  
        }  
        $i = 10;  
        increment($i);  
        echo $i;  
        ?>


</body>
</html>