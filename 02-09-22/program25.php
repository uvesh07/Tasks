<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 25</title>
</head>

<body>

    <h1>Program to check whether scanned character is a vowel or a consonant.</h1>
<form action="" method="get">
    <label for="">Enter a color character : </label> <input type="text" name="char"> <br>
    <input type="submit" name="btn">
</form>

<?php

error_reporting(0);

            $char = $_GET['char'];

                $char = strtoUpper($char);
                
                switch ($char) {
                    case 'A':
                        echo "The character is vowel..";
                        break;
                    case 'E':
                        echo "The character is vowel..";
                        break;
                    case 'I':
                        echo "The character is vowel..";
                        break;
                    case 'O':
                        echo "The character is vowel..";
                        break;
                    case 'U':
                        echo "The character is vowel..";
                        break;
                    default:
                        echo "The character is consonant..";
                }
?>
</body>

</html>