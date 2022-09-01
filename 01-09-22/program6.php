<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 6</title>
    <!-- <script>
        function gross(){
            var salary = parseInt(document.getElementById('sal').value);

            var da = (40/100) * salary;
            var hra = (20/100) * salary;

            var gross = parseFloat(salary + da + hra);

            document.write("The Gross salary is : " + gross)
        }
    </script> -->
</head>
<body>
    
     <h1>Gross salary calculation</h1>
 <form method="get"> 
    <label for="">Enter your salary :</label> <input type="number" id="sal" name="sal" placeholder="Enter salary"> <br>

    <button onclick="gross()">Submit</button>
    </form>
    <?php
         $sal = $_GET["sal"];
        // $sal = 50000;
        $da = (40/100) * $sal;
        $hra = (20/100) * $sal;

        $gross = ($sal+$da+$hra);

        echo "The gross salary is: " . $gross;

    ?>

</body>
</html>