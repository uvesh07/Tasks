<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 12</title>

    <script>
        function insert() {

            
            
        }
    </script>
</head>

<body>

    <h1>PHP Array : </h1>
    <h2>Read an array and print it in ascending order.(SORTING)</h2>
<?php
    $i = 0;
    $j = 0;
    $temp = 0;

            $a = [4, 5, 6, 8, 9, 1, 50, 47, 20];

            for ($i = 1; $i < count($a); $i++) {
                
                $temp = $a[$i];
                $j = $i - 1;

                while ($j >= 0 && $temp <= $a[$j])  /* Move the elements greater than temp to one position ahead from their current position*/ {
                    $a[$j + 1] = $a[$j];
                    $j = $j - 1;
                }
                $a[$j + 1] = $temp;
            }

            for($i=0;$i<count($a);$i++){
                
                echo $a[$i] . "<br>";

            }
?>
</body>

</html>