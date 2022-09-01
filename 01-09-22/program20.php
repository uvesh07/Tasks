<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 20</title>

    <script>
        function digits() {
            var num = parseInt(document.getElementById('num').value);
            var c = 0;

            do {
                num = parseInt(num / 10);
                c = c+1;
            } while (num != 0);

            document.write("There are " + c + " Digits in this number..");
        }
    </script>
</head>

<body>

    <h1>Read to read a n digit number and print how much digits are available in the
        number.(using while and do-while)</h1>
    
        <?php

            $num = 12346554;
            $c = 0;

            do{
                $num = intval($num/10);
                $c = $c+1;
            }while($num != 0);

            echo "There are " . $c . " Digits in this number..";
        ?>

</body>

</html>