<?php  
echo "<h1> Default parameter <br> </h1>";
function sayHello($name="Ashok"){  

    echo "Name : " . $name . "<br>";

}  
sayHello("Amit");  
sayHello();//passing no value  
sayHello("Atul");  
?> 
