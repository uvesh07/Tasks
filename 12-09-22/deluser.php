<?php

include 'conn.php';
$id = $_GET['id'];
$tb = $_GET['tname'];
$result = mysqli_query($a, "delete from $tb where id=$id") or die("Error in Query");
// echo "<h1>Update Admin Panel : </h1> <br>";
if ($result) {
    header("Location:users.php?name=$tb");
} else {
    echo "Error in Inserting";
}
