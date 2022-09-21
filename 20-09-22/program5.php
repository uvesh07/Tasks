<?php

echo "<h1> Final Keyword Example in function: </h1>";

class Base {
    final function printdata() {
        echo "Printdata function ";
    }
}
class Derived extends Base {
    function nonfinal() {
        echo "<br> nonfinal function ";
    }

    // function printdata(){ //Cannot override final method Base::printdata()
    //     echo "Printdata function in Derived class";
    // }
} 
$obj = new Derived;
$obj->printdata();
$obj->nonfinal();
?>
