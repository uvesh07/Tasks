<html>
<head>
<title>program 20</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and print its transpose.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
echo "Original array : <br> <br> ";

echo "<table border=1px>";
for($i=0;$i<count($arr);$i++){
    echo "<tr>";
    for($j=0;$j<count($arr);$j++){
        echo "<td>" . $arr[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table> <br> ";


for($i=0;$i<count($arr);$i++){

        for($j=0;$j<count($arr);$j++){
            $trans[$j][$i] = $arr[$i][$j];
        }

    }

echo "After Transpose : <br> <br> ";    

    echo "<table border=1px>";
    for($i=0;$i<count($trans);$i++){
        echo "<tr>";
        for($j=0;$j<count($trans);$j++){
            echo "<td>" . $trans[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table> <br> ";


?>
</body>
</html>