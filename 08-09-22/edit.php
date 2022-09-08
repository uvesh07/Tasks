<?php

        include 'conn.php';
        $id=$_GET['id'];
        $result = mysqli_query($a,"select * from users where id=$id") or die("Error in Query");
        echo "<h1>Update Admin Panel : </h1> <br>";
        
        while($row= mysqli_fetch_array($result)){
            
            $sid = $row['id'];
            $sname = $row['name'];
            $scity = $row['city'];
            $mob = $row['mobile'];
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
 <h2>Update Values in user table : </h2>

 <form method="post">
<table>
<tr>  <td>  Enter Id : </td> <td> <input type="text" name="nid" value="<?php echo $sid;?>" disabled>  </td> </tr>
<tr>  <td>  Enter Name : </td> <td> <input type="text" name="nname" value="<?php echo $sname; ?>">  </td> </tr>
<tr>  <td>  Enter City : </td> <td> <input type="text" name="ncity" value="<?php echo $scity; ?>">  </td> </tr>
<tr>  <td>  Enter Mobile : </td> <td> <input type="text" name="nmob" value="<?php echo $mob; ?>">  </td> </tr>
<tr></tr>
  <tr> <td> <input type="submit" name="btn" value="Update"> </td> </tr>

    </table>
 </form>

 <?php
 
        if(isset($_POST['btn'])){

            // $sid = $_POST['nid'];
            $sname = $_POST['nname'];
            $scity = $_POST['ncity'];
            $smob = $_POST['nmob'];

            $result = mysqli_query($a,"update users set id=$sid,name='$sname',city='$scity',mobile=$smob where id=$id");

            if($result){
                header('Location:admin.php');
            }
            else
            {
                echo "Error in Inserting";
            }
        }
    ?>
 
</body>
</html>

