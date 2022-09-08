<?php
session_start();

if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){

    include 'conn.php';
    $result = mysqli_query($a,'select * from users') or die("Error in Query");


        echo "<h1>Admin Panel : </h1> <br>";
        echo "<table border=3><tr><td>id</td><td>name</td><td>address</td><td>mobile</td><td>Edit</td><td>Delete</td></tr>";
        while($row= mysqli_fetch_array($result)){
            echo "<tr>";
            $id=$row['id'];
            echo "<td>".$id."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td><a href=edit.php?id=$id>Edit</a></td>";
            echo "<td><a href=del.php?id=$id>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
      
        echo "<br/><br/>";
    
}
else{
    header('Location:login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : </title>
</head>
<body>
 <h2>Insert Values in user table : </h2>

 <form method="post">
<table>
   <tr> <td> Enter Id : </td> <td> <input type="text" name="nid"> </td> </tr>
   <tr> <td> Enter Name : </td> <td> <input type="text" name="nname">  </td> </tr>
   <tr> <td> Enter City : </td> <td> <input type="text" name="ncity">  </td> </tr>
   <tr> <td> Enter Mobile : </td> <td> <input type="text" name="nmob">  </td> </tr>
   <tr></tr> <tr></tr>
   <tr> <td>  <input type="submit" name="btn" value="Insert"> </td> <td> <input type="submit" name="logout" value="Logout"> </td> </tr> 
    
</table> <br> 
 </form>

 <?php
        if(isset($_POST['btn'])){

            $sid = $_POST['nid'];
            $sname = $_POST['nname'];
            $scity = $_POST['ncity'];
            $smob = $_POST['nmob'];

            $result = mysqli_query($a,"insert into users values ($sid,'$sname','$scity',$smob)");

            if($result){
                header('Location:admin.php');
            }
            else
            {
                echo "Error in Inserting";
            }
        }

        if(isset($_POST['logout'])){
        session_unset();
        mysqli_close($a);
        header('Location:login.php');
    }
    ?>
 
</body>
</html>

