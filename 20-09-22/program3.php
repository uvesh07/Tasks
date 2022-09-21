<?php

echo "<h1> Abstract class : </h1>";

abstract class Base {
    abstract function printdata();
}
class Derived extends base {
    function printdata() {
        echo "This is print Abstract function in derived class : ";
    }
}
$b1 = new Derived;
$b1->printdata();
?>
