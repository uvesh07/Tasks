<html>
<head>
<title>program 2</title>
</head>
<body>
    <h1>PHP SUM function : </h1>

    <form action="" method="get">
        Enter first number : <input type="number" name="first">
        Enter second number : <input type="number" name="sec">

        <input type="submit" name="btn">

    </form>
    <?php
    if(isset($_GET['btn'])){

         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         $num1 = $_GET['first'];
         $num2 = $_GET['sec'];

         addFunction($num1, $num2);

        }
     ?>

</body>
</html>