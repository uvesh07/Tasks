<?php
session_start();
ob_start();
include 'conn.php';

$nameErr = $emailErr = $passErr = $imgErr = "";
function input_data($data){

    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  

}
if(isset($_POST['btn'])){

    if (empty($_POST["user"])) {  
        $nameErr = "* Name is required";  
    } else {  

    $vname = input_data($_POST["user"]);  
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z ]*$/",$vname)) {  
            $nameErr = "* Only alphabets and white space are allowed";  
        }  
    }  

    if (empty($_POST["email"])) {  
        $emailErr = "* Email is required";  
    } else {  

    $vemail = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($vemail, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "* Invalid email format";  
            }  
    }
    
    if (empty($_POST["pass"])) {  
        $passErr = "* Password is required";  
    }
    elseif($_POST["pass"] != $_POST["cpass"]){
        $passErr = "* Password does not match";
    }

    if ($_FILES["filetoupload"]["name"] == "") {  
        $imgErr = "* Image is required";  
    } else {  

        $vimage = $_FILES["filetoupload"]["type"];
        $allowed = array("image/jpg","image/jpeg","image/png","image/gif");  
            // check that the e-mail address is well-formed  
            if (!in_array($vimage,$allowed)) {  
                $imgErr = "* Invalid format. Only jpg / jpeg/ png /gif format allowed";  
            }  
    }

}
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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                        <span style="color:red;"> <?php echo $nameErr; ?> </span>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="user" placeholder="jhondoe">
                                <label for="floatingText">Username</label>
                            </div>
                            <span style="color:red;"> <?php echo $emailErr; ?> </span>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <span style="color:red;"> <?php echo $passErr; ?> </span>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="cpass" placeholder="Confirm Password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                            <span style="color:red;"> <?php echo $imgErr; ?> </span>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Choose profile pic</label>
                                <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file" name="filetoupload">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <input type="submit" name="btn" class="btn btn-primary py-3 w-100 mb-4" value="Sign Up">
                            <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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

<?php

if (isset($_POST['btn'])) {

    if($nameErr == "" && $emailErr == "" && $passErr == "" && $imgErr == ""){
        $user = $_POST['user'];
    
        $email = $_POST['email'];

        $pass = md5($_POST['pass']);


        $filename = str_replace(" ","",$_FILES["filetoupload"]["name"]);
        $filepath = "images/" . $filename;

        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $filepath);

        $query = "insert into users(username,email,pass,pic) values('$user','$email','$pass','$filepath')";

        $result = mysqli_query($a, $query);


        if ($result) {

            header("Location:signin.php");
        } else {
            echo "ERROR in Signup ...";
        }

    }
}
?>
</body>

</html>