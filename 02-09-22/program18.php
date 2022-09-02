<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 18</title>
</head>
<body>

    <h1>Program to check whether scanned character is a vowel or a consonant.</h1>
    <form action="" method="get">
        <label for="">Enter a character : </label><input type="text" name="char"> <br>
        <button onclick="check()">submit</button>
    </form>

    <?php

    error_reporting(0);
            $char = $_GET['char'];

            $char = strtoUpper($char);
            if($char == "A" || $char == "E" || $char == "I" || $char == "O" || $char == "U"){
                echo "The character is vowel.";
            }
            else{
                echo "The character is consonant.";
            }
    ?>
</body>
</html>