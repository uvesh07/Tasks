<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progrm 5</title>

    <script>
        function convert(){
          
        }
    </script>
</head>
<body>
    <h1>Read quantity of 50,25,20,10,5,2,1 paisa coins and convert them into Rs.</h1>
        
        <?php

          $ps = 100;
            
          

          $ps_50 = $ps/2;
          $ps_25 = $ps/4;
          $ps_20 = $ps/5;
          $ps_10 = $ps/10;
          $ps_5 = $ps/20;
          $ps_2 = $ps/50;
          $ps_1 = $ps/100;

          echo "Rupees of Number of 50ps coins :" . $ps_50 ." rs". "<br>Rupees of Number of 25ps coins :" . $ps_25 ." rs". 
          "<br>Rupees of Number of 20ps coins :" . $ps_20 ." rs". "<br> Rupees of Number of 10ps coins :" . $ps_10 ." rs". 
          "<br>Rupees of Number of 5ps coins :" . $ps_5 ." rs". "<br>Rupees of Number of 2ps coins :" . $ps_2 ." rs". 
          "<br>Rupees of Number of 1ps coins :" . $ps_1 ." rs";
          


          // rs = ps/100;
          // ps = ps

        ?>

</body>
</html>