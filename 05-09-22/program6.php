<html>
<head>
<title>program 6</title>
</head>
<body>
    <h1>PHP Recursive Function : </h1>
    <?php    
        function display($number) {    
            if($number<=5){    
            echo "$number <br/>";    
            display($number+1);    
            }  
        }    
            
        display(1);    
?> 


</body>
</html>