<html>
<head>
<title>program 10</title>
</head>
<body>
    <h1>PHP Multidimensional Array : </h1>
    <?php    



        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );

        $arr = array (  
            array(1,"Amit",400000),  
            array(2,"john",500000),  
            array(3,"rahul",300000)  
        );


        echo " <b>Print Array Normally : </b>  <br> <br> ";
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

        echo "<br> <b> Print Array using Loop : </b> <br> <br>";
        for ($row = 0; $row < 3; $row++) {  
            for ($col = 0; $col < 3; $col++) {  
              echo $arr[$row][$col]."  ";  
            }  
            echo "<br/>";  
          }  
          
    ?> 



</body>
</html>