<html>
<head>
<title>program 7</title>
</head>
<body>
    <h1>PHP factorial using Recursive Function : </h1>

    <form action="" method="get">
        Enter number : <input type="text" name="num">
        

        <input type="submit" name="btn">

    </form>
    <?php    

    if(isset($_GET['btn'])){
        function factorial($n)    
        {    
            if ($n < 0)    
                return -1; /*Wrong value*/    
            if ($n == 0)    
                return 1; /*Terminating condition*/    
            return ($n * factorial ($n -1));    
        }    
            $num = $_GET['num'];
        echo factorial($num);  
    }  
    ?> 



</body>
</html>