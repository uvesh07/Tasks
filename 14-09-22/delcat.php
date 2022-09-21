<?php

include 'conn.php';
$name = $_GET['name'];
// echo $name;
// $tb = $_GET['product'];
$result = mysqli_query($a, "delete from category where name='$name'") or die("Error in Query1");
$result1 = mysqli_query($a,"Drop Table $name") or die("Error in Query2");
// echo "<h1>Update Admin Panel : </h1> <br>";
if ($result && $result1) {
    header("Location:index.php");
} else {
    echo "Error in Inserting";
}
