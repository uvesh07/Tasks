<?php

echo "<h1> call by value </h1>";

function adder($str2)  
{  
      $str2 .= 'Call By Value';  

        echo "Inside function value of str2 : " . $str2;
}  
$str = 'Hello ';  
adder($str);  

echo "<br> outside of function value of str : " . $str;

?>
