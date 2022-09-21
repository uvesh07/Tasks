<?php

include 'conn.php';
$id = $_GET['id'];
$tb = $_GET['product'];
$result = mysqli_query($a, "delete from $tb where id=$id") or die("Error in Query");
// echo "<h1>Update Admin Panel : </h1> <br>";
if ($result) {
    header("Location:product.php?name=$tb");
} else {
    echo "Error in Inserting";
}
