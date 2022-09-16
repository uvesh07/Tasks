<?php

echo "<h1>Copy Constructor In php : </h1>";

	class CopyConstructor {
		public $name;
		public $food;
		public function __construct($name,$food) {  //default constructor
            $this->name = $name;
            $this->food = $food;
        } 
		public function show() // working as copy constructor
		{
            echo "<br> Name in Constructor : " . $this->name . "<br> Food in constructor : " . $this->food;
		}
	}
	    $obj1 = new CopyConstructor("Uvesh","Pizza");
    	$obj2 = $obj1; //both hold the same reference, 
        echo "Before changing Name : <br>";
        $obj1->show();
        echo "<br> <br> After changing Name : <br>";
	    $obj2->name='Nishit'; //so if we change in obj2 then it reflect also obj1. so this method is not good.
	    $obj1->show();
?>
