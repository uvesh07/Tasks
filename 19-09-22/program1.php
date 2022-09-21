<?php

echo "<h1> Inheritance using constructors <br> </h1>";

class parentc{

    function __construct($name){
        echo "Name : " . $name;
    }

}

class child extends parentc{

    function __construct(){
        parent::__construct("sanket");
    }
}
    
$obj = new child();

?>