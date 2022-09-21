<?php  

echo "<h1> call by Reference </h1>";

function adder(&$str2)  
{  
       $str2 .= 'Call By Reference';  

       echo "Inside function value of str2 : " . $str2;
}  
$str = 'This is ';  
adder($str);  

echo "<br> outside of function value of str : " . $str;

?>
