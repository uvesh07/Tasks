<html>
<head>
<title>program 11</title>
</head>
<body>
    <h1>PHP SUM of Array Elements : </h1>
    <?php    
  
        $sum=0;
        $num = array(10,20,30,40,50);
        for ($i=0;$i<5;$i++)
        {
        $sum+=$num[$i];
        }
        echo $sum;
      
    ?> 
</body>
</html>