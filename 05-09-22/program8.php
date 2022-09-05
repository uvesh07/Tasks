<html>
<head>
<title>program 8</title>
</head>
<body>
    <h1>PHP ways to define Array : </h1>
    <?php    
       $arr = array(1,2,3,4,5,6);

    //    OR

        $arr1[0] = 1;
        $arr1[1] = 2;
        $arr1[2] = 3;
        $arr1[3] = 4;
        $arr1[4] = 5;
        $arr1[5] = 6;

    //    OR

        $arr2=[1,2,3,4,5];
        
    //  ways to print Array : 

    //  Print normally :
     
        echo "ARRAY : <br> ". $arr[0] . "<br>" . $arr[1] . "<br>" . $arr[2] . "<br>" 
        . $arr[3] . "<br>" . $arr[4] . "<br>" .  $arr[5];
        
    //  Print through for loop :

        $arrlength = count($arr1);

        echo "<br> ARRAY 1 : <br>";
        for($x = 0; $x < $arrlength; $x++) {
        echo $arr1[$x];
        echo "<br>";
        }

    echo "Array 2 : <br>";
    //  Print using for each loop
    
    foreach ($arr2 as $array2) {
        echo $array2 . '<br>';
    }
    
    ?> 



</body>
</html>