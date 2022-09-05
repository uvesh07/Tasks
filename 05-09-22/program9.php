<html>
<head>
<title>program 9</title>
</head>
<body>
    <h1>PHP ways to define Associative Array : </h1>
    <?php    
       $arr = array("uvesh"=>20 , "setu"=>22, "shruti"=>24);

    //    OR

    $arr1['Peter'] = "35";
    $arr1['Ben'] = "37";
    $arr1['Joe'] = "43";
        
    //  ways to print Array : 

    echo "Array : <br>";
    //  Print normally :

    echo "Uvesh is " . $arr['uvesh'] . " years old. <br>" . "Shruti is " . $arr['shruti'] . " years old <br> ";
     

    echo "Array 1 : <br>";
    //  Print using for each loop
    
    foreach($arr1 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }
      
    
    ?> 



</body>
</html>