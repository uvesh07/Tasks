<?php

echo "<h1> Accesing Parent constructor using Parent keyword </h1>";

class ParentClass
	{
		function __construct()
		{
			echo "<br> Parent Constructor <br>";
		}
	}
class ChildClass extends Parentclass
	{
		function __construct()
		{
			echo "<br> Child Constructor <br>";
			parent::__construct();
		}
	}
$obj = new ParentClass();
$obj1 = new ChildClass();
?>
