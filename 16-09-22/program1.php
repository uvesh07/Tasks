<?php
echo "<h1> Parent Keyword :  </h1> <br> ";
class foo {
     function add($a,$b)
    {
        echo "Addition : " . ($a+$b);
    }
}
class bar extends foo {
    function redirect($a,$b)
    {
        parent::add($a,$b);
    }
}
$b = new bar;
$b->redirect(10,20);
?>
