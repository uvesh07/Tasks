<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 4</title>

    <script>
        function calculate(){
            var cur = parseInt(document.getElementById('cur').value);

            var area = parseFloat((cur*cur)/(4*Math.PI))

            document.write("The area of circle is : " + area);
        }
    </script>
</head>
<body>
    
<h1>Program to calculate the area of a circle while the circumference is given.</h1>
<form method="get">
    <label for="">Enter circumference : </label><input type="number" name="cur"> <br>
    <input type="submit" name="btn">
</form>
<?php

error_reporting(0);

        $cur = $_GET['cur'];
        $area = floatval(($cur*$cur)/(4*pi()));

        echo "The area of circle is : " . $area;

?>
</body>
</html>