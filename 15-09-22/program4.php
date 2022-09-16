<?php

// Multilevel Inheritance

class Employee{
    public $name = "Uvesh";
}

class salary extends Employee{
    public $sal = 15000;
}

class review extends salary{
    public $review = 10;
}
$show = new review;

echo "The Name of Employee is : " . $show->name . "<br> The salary of Employee is : " . $show->sal . "<br> The Review of Employee is: " . $show->review;



?>