<?php

// $nameErr = $passErr = $imgErr = "";
// function input_data($data){

//     $data = trim($data);  
//     $data = stripslashes($data);  
//     $data = htmlspecialchars($data);  
//     return $data;  

// }
// if(isset($_POST['btn'])){

//     if (empty($_POST["sname1"])) {  
//         $nameErr = "* Name is required";  
//     } else {  

//     $vname = input_data($_POST["sname1"]);  
//         // check if name only contains letters and whitespace  
//         if (!preg_match("/^[a-zA-Z ]*$/",$vname)) {  
//             $nameErr = "* Only alphabets and white space are allowed";  
//         }  
//     }  
    
//     if (empty($_POST["spass"])) {  
//         $passErr = "* Password is required";  
//     }

//     if ($_FILES["filetoupload"]["size"] == 0) {  
        
//     } else {  

//         $vimage = $_FILES["filetoupload"]["type"];
//         $allowed = array("image/jpg","image/jpeg","image/png","image/gif");  
//             // check that the e-mail address is well-formed  
//             if (!in_array($vimage,$allowed)) {  
//                 $imgErr = "* Invalid format. Only jpg / jpeg/ png /gif format allowed";  
//             }  
//     }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <?php include 'header.php';?>

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <?php include 'sidebar.php';?>
            <?php
                include 'conn.php';
                // session_start();
                $uid = $_SESSION['id'];
            ?>
        </div>

        <?php

            if (isset($_SESSION['id'])) {

            } else {
                header('Location:signin.php');
            }

            include 'conn.php';
        ?> 
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'nav.php';?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center"> -->

            <?php
                $id = $_GET['id'];
                $tb = 'users';
                $query1 = mysqli_query($a,"SHOW COLUMNS FROM $tb");
                //    $col = mysqli_fetch_array($query1);
                   $result = mysqli_query($a,"select * from $tb where id=$id");
                   $row = mysqli_fetch_array($result);
            ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 "></h6>
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Key</th>
                                        <th scope="col">Value</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($col = mysqli_fetch_array($query1)) {?>
                                    <tr>
                                        <?php
                                            if($col['Field'] == "pass"){
                                                continue;// echo '<img src="' .$row["$f1"]. '" width="150px" height="120px">';
                                            }   
                                        ?>
                                        <td>
                                        <?php 
                                                                                 
                                                $f1 = $col['Field']; 
                                                echo $f1;
                                            
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                            if($col['Field'] == "pass"){
                                               // echo '<img src="' .$row["$f1"]. '" width="150px" height="120px">';
                                                continue;
                                            }

                                            if($col['Field'] == "pic"){
                                                echo '<img id="img1" class="img-fluid" src="' .$row["$f1"]. '" width="150px" height="120px">';
                                            }
                                            else{
                                                echo $row["$f1"]; 
                                            }
                                        ?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                           
                            <a href="edit_profile.php?id=<?php echo $id; ?>" class="btn btn-lg btn-primary rounded-pill m-2" name="addc"> Edit Profile </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    

            <!-- Blank End -->

            <?php

                if (isset($_POST['btn'])) {

                    if($nameErr == "" && $passErr == "" && $imgErr == ""){

                    // $sid = $_POST['nid'];
                    $sname1 = $_POST['sname1'];
                    $semail = $_POST['semail'];
                    
                    if($_POST['spass']==$row['pass']){
                        $spass = $row['pass'];
                    }
                    else{
                        $spass = md5($_POST['spass']);
                    }

                    if(!$_FILES['filetoupload']['size'] == 0){

                        $filename = str_replace(" ","",$_FILES["filetoupload"]["name"]);
                        $filepath = "images/" . $filename;
                        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $filepath);
                    }
                    else{
                        $filepath = $row['pic'];
                    }

                    $result1 = mysqli_query($a, "update $tb set username='$sname1',pass='$spass',pic='$filepath' where id=$uid");

                    if ($result1) {
                        header("Location:index.php");
                    } else {
                        echo "Error in Inserting";
                    }
                }
            }
        ?>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <?php include 'footer.php';?>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

          