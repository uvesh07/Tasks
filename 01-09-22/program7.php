<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 7</title>

   
</head>
<body>
    
    <h1>Read cost price and selling price of an item and find out how much loss or profit
        occurs.</h1>
    
        <form action="" method="get">
            <label for="cost">Enter Cost Price : </label> <input type="number" name="cost"> <br>
            <label for="sell">Enter Selling Price : </label> <input type="number" name="sell"> <br>
        <button onclick="profit_or_loss()">Submit</button>
        </form>

        <?php

            $cost = $_GET['cost'];
            $sell = $_GET['sell'];

            $a = $sell-$cost;

            if($sell > $cost){
                echo "The Profit is :" . $a;
            }
            elseif($sell < $cost){
                echo "The Loss is :" . $a;
            }
            else{
                echo "No profit No Loss...";
            }
        ?>
</body>
</html>