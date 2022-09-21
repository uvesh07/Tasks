<?php
ob_start();
include 'conn.php';
session_start();

$passErr = $emailErr = "";

function input_data($data){

    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  

}
if(isset($_POST['btn'])){

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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="" method="post">
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
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="btn" value="Sign In">
                            <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
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

    if($emailErr == "" && $passErr == ""){

        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
    
        $result = mysqli_query($a, "select * from users where email='$email' and pass='$pass'");
        $row = mysqli_fetch_array($result);
        // print_r($result);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['id'] = $row['id'];

            // setcookie("mail",$email,time()+3600);

            header('Location:index.php');
        } else {
            echo "please check email OR password sign in";
        }
    }
}
?>
</body>

</html>