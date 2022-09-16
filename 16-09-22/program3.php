<?php

echo "<h1> This Keyword :  </h1> <br> <h3> It is use for reffering variable in its own class. </h3>";

class Car {

    public $name = "Uvesh";
    public $company = "Addwebsolution";
    

    public function hello()
    {
      echo "Hello friends I am <i>" . $this -> name . "</i> and I am currently working at <i>" . $this -> company;
    }
}

$obj = new Car();

$obj->hello();
?>