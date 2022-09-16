<?php
echo "<h1> Self Keyword :  </h1> <br> <h3> It is use for accesing static variable in its own class. </h3>";

class bar {
    const name = "Uvesh Pathan";
    function redirect()
    {
       echo  "This is the constant name recieve by SELF keyword : ".self::name;
    }
}
$b = new bar;
$b->redirect();
?>
