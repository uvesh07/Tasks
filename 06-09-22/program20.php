<html>
<head>
<title>program 20</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read two 2D array and perfume addition, subtraction and multiplication on these
arrays, store result In third array and print it.</h2>

<?php
$a1 = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$a2 = [
    [10,11,12],
    [13,14,15],
    [16,17,18]
];
echo "First matrix : ";
echo "<table border=1px>";
for($i=0;$i<count($a1);$i++){
    echo "<tr>";
    for($j=0;$j<count($a1);$j++){
        echo "<td>" . $a1[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table> <br> ";

echo "Second matrix : ";

echo "<table border=1px>";
for($i=0;$i<count($a1);$i++){
    echo "<tr>";
    for($j=0;$j<count($a1);$j++){
        echo "<td>" . $a2[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table> <br>";

for($i=0;$i<count($a1);$i++){

    for($j=0;$j<count($a1);$j++){
        $a3[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }

}

echo "Sum of two 2d Arrays : <br> <br>";
echo "<table border=1px>";
for($i=0;$i<count($a1);$i++){
    echo "<tr>";
    for($j=0;$j<count($a1);$j++){
        echo "<td>" . $a3[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


?>
</body>
</html>