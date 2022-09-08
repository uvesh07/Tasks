<?php

        include 'conn.php';
        $id=$_GET['id'];
        $result = mysqli_query($a,"delete from users where id=$id") or die("Error in Query");
        // echo "<h1>Update Admin Panel : </h1> <br>";
        if($result){
            header('Location:admin.php');
        }
        else
        {
            echo "Error in Inserting";
        }
 ?>

