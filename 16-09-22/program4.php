<?php

    echo "<h1> Constructor In php : </h1>";

   
class greeting {

    public $name;

    function __construct($name) {
        $this->name = $name;
        }
    function get_name() {
        return $this->name;
        }
    }

    $apple = new greeting("Uvesh");
    echo "This is name from constructor : ".$apple->get_name();


?>