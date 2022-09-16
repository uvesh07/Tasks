<?php

echo "<h1> Constructor In php : </h1>";

class Employee
{
    Public $name;
    Public $position;

    function __construct($name,$position)
    {
        $this->name = $name;
        $this->position = $position;
    }    

    function print(){
        echo "Employee Name set by constructor : " . $this->name . "<br> Position of Employee : " . $this->position;
    }

}   
$obj= new Employee("Uvesh","developer");

$obj->print();
?>
