<?php

echo "<h1> Polymorphism : </h1>";
echo "<h3> Function Overriding </h3>";

class Shape  
{  
function draw()
{
    echo "This is draw function in parent class <br>";
}  
}  
class Circle extends Shape 
{  
function draw()  
{
    echo "This is draw function in child class <br>";
    parent::draw();
}  
}
$circ = new Circle();

$circ->draw();

?>