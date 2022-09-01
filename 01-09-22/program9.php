<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 9</title>

    
    
</head>

<body>
  
        <h1>Enter character you want to know it is in Uppercase or Lowercase or digit</h1>
        <form action="" method="get">
            <label for="character">Enter one character : </label><input type="text" id="character" name="character" autofocus maxlength="1"> <br>


            <button name="btn" onclick="check()">check</button>
        </form>
 
        <?php

if(isset($_GET['btn'])){
    check();
}

function check(){
    $ch = $_GET['character'];
    $index = 0;
    $i = ord($ch);

    echo "ASCII value of " + $ch + " is " + $i + "<br/>";
    
    if ($i >= 65 && $i <= 90) {
        echo $ch . " is in Uppercase Character";
    }
    elseif ($i >= 97 && $i <= 122) {
        echo $ch . " is in Lowercase Character";
    }
    elseif ($i >= 48 && $i <= 57) {
        echo $ch . " is digit";
    }
    else {
        echo $ch . " is special Character";
    }
}    
?>        
   
</body>

</html>