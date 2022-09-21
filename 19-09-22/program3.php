<?php
Interface MyInterface1 {
	public function myMethod1();
}
Interface MyInterface2 {
	public function myMethod2();
}
class MyClass implements MyInterface1, MyInterface2 {
	public function myMethod1() {
        echo "This is Method 1.. of interface 1<br> ";
	}
	public function myMethod2() {
        echo "This is Method 2.. of interface 2";
	}
}
$obj = new MyClass();
$obj -> myMethod1();
$obj -> myMethod2();
?>