<?php

// Singlelevel Inheritance

class Employee{
    public $sal = 25000;
}

class bonus extends Employee{
    public $bonus = 10000;
}

$show = new bonus;

echo "The salary of Employee is : " . $show->sal . "<br> The bonus of Employee is : " . $show->bonus;



?>