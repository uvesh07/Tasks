<html>
<head>
<title>program 25</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read a 2D array and swap their elements.</h2>

<?php
$arr = [
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
echo "Before swaping : <br> <br> ";

echo "<table border=1px>";
for($i=0;$i<count($arr);$i++){
    echo "<tr>";
    for($j=0;$j<count($arr);$j++){
        echo "<td>" . $arr[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table> <br> ";

for($p=0,$i=count($arr)-1;$i>=0;$i--,$p++){

        for($k=0,$j=count($arr[$i])-1;$j>=0;$j--,$k++){
            $new[$i][$j] = $arr[$p][$k];        
        }
    }

    echo "After swaping : <br> <br> ";
    
    echo "<table border=1px>";
    for($i=0;$i<count($new);$i++){
        echo "<tr>";
        for($j=0;$j<count($new[$i]);$j++){
            echo "<td>" . $new[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table> <br> ";

?>
</body>
</html>