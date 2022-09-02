<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 24</title>
</head>

<body>

    <h1>Program to show 5 arithmetic operations on two integer numbers using Switch-case.</h1>

    <form action="" method="get">
    <label for="">Enter First number : </label> <input type="number" name="num1"><br>
    <label for="">Enter second number : </label> <input type="number" name="num2"><br>

    <h3>Enter 1 for Addition, 2 for Subtraction, 3 for multiplication, 4 for division </h3> <br>

    <input type="number" name="user_input"> <br>
    <input type="submit" name="btn">
</form>
    <?php

error_reporting(0);

          $num1 = intval($_GET['num1']);
          $num2 = intval($_GET['num2']);
          $user_input = intval($_GET['user_input']);

          switch ($user_input) {
              case 1:
                  echo "Addition of two number is : " . intval($num1 + $num2);
                  break;
              case 2:
                  echo "Subtraction of two number is : " . intval($num1 - $num2);
                  break;
              case 3:
                  echo "Multiplication of two number is : " . intval($num1 * $num2);
                  break;
              case 4:
                  echo "Division of two number is : " . floatval($num1 / $num2);
                  break;
              default :
                  echo "Plese Enter between 1 to 4..";
          }

    ?>
</body>

</html>