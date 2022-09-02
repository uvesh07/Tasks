<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 2</title>

</head>
<body>
    <form method="get">
        <label>Enter Radius of sphere : </label>  <input type="number" name="radius"> <br>
        <input type="submit" name="btn">
    </form>

    <?php

    error_reporting(0);
        $r = $_GET['radius'];

        $vol = floatval((4/3) * pi() * ($r*$r*$r));

        $area = floatval(4 * pi() * ($r*$r));

        echo "The area of sphere is : " . $area . "<br> The volume is :" . $vol;

    ?>
</body>
</html>