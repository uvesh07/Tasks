<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 20</title>

    <script>
        function check(){

            var num1 = parseInt(document.getElementById('num1').value);
            var num2 = parseInt(document.getElementById('num2').value);
            var num3 = parseInt(document.getElementById('num3').value);
            var num4 = parseInt(document.getElementById('num4').value);

            
                document.write(num1>num2 && num1>num3 && num1>num4 ? ("The Largest number is : "+ num1) : "");
            
            
                document.write(num2>num1 && num2>num3 && num2>num4 ? ("The Largest number is : "+ num2) : "");
            
            
                document.write(num3>num1 && num3>num2 && num3>num4 ? ("The Largest number is : "+ num3) : "");
            
            
                document.write(num4>num1 && num4>num2 && num4>num3 ? ("The Largest number is : "+ num4) : "");
            

            
                document.write(num1<num2 && num1<num3 && num1<num4 ? ("<br> The Smallest number is : "+ num1) : "");
            
            
                document.write(num2<num1 && num2<num3 && num2<num4 ? ("<br> The Smallest number is : "+ num2) : "");
            
            
                document.write(num3<num1 && num3<num2 && num3<num4 ? ("<br> The Smallest number is : "+ num3) : "");
             
            
                document.write(num4<num1 && num4<num2 && num4<num3 ? ("<br> The Smallest number is : "+ num4) : "");
            
        }
    </script>
</head>
<body>

    <h1>Program to calculate Maximum / Minimum/ Second Maximum out of 4 numbers
        (Using ? : Operator)</h1>
    <form action="" method="get">
        <label for="">Enter first number : </label> <input type="number" name="num1"><br>
        <label for="">Enter second number : </label> <input type="number" name="num2"><br>
        <label for="">Enter third number : </label> <input type="number" name="num3"><br>
        <label for="">Enter forth number : </label> <input type="number" name="num4"><br>
        <input type="submit" name="btn">
    </form>

    <?php

    error_reporting(0);
    
         $num1= intval($_GET['num1']);
         $num2 = intval($_GET['num2']);
         $num3 = intval($_GET['num3']);
         $num4 = intval($_GET['num4']);

         echo $num1>$num2 && $num1>$num3 && $num1>$num4 ? "The Largest number is : ". $num1 : "";

         echo $num2>$num1 && $num2>$num3 && $num2>$num4 ? "The Largest number is : ". $num2 : "";

         echo $num3>$num1 && $num3>$num2 && $num3>$num4 ? "The Largest number is : ". $num3 : "";

         echo $num4>$num1 && $num4>$num2 && $num4>$num3 ? "The Largest number is : ". $num4 : "";



         echo $num1<$num2 && $num1<$num3 && $num1<$num4 ? "The Smallest number is : ". $num1 : "";

         echo $num2<$num1 && $num2<$num3 && $num2<$num4 ? "The Smallest number is : ". $num2 : "";

         echo $num3<$num1 && $num3<$num2 && $num3<$num4 ? "The Smallest number is : ". $num3 : "";

         echo $num4<$num1 && $num4<$num2 && $num4<$num3 ? "The Smallest number is : ". $num4 : "";
    ?>
</body>
</html>