<html>
<head>
<title>program 4</title>
</head>
<body>
    <h1>PHP Return value in function : </h1>

    <form action="" method="get">
        Enter first number : <input type="number" name="first">
        Enter second number : <input type="number" name="sec">

        <input type="submit" name="btn">

    </form>

    <?php
    if(isset($_GET['btn'])){

         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
         }

         $num1 = $_GET['first'];
         $num2 = $_GET['sec'];

         $return_value = addFunction($num1, $num2);
         
         echo "Returned value from the function : $return_value";

        }  
      ?>



</body>
</html>