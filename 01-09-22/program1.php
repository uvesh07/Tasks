<!DOCTYPE html>
<html lang="en">
<head>
    <title>Programe 1</title>
</head>
<body>
    
    <h1>Area of triangle</h1>
    <form action="" method="get">

        <label for="base"> <b> Enter Base of triangle : </b></label><input type="number" name="base" id="base"> <br>
        <label for="height"> <b> Enter height of triangle : </b></label><input type="number" name="height" id="height"><br>
        <button onclick="area()">Submit</button>
    </form>

    <?php

    $base = $_GET['base'];
    $height = $_GET['height'];

    echo "The answer is :  ".(1/2 * ($base) * ($height));
?>

</body>
</html>