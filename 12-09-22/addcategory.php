<?php

include 'conn.php';

$nameErr = $imgErr = "";

function input_data($data){

    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  

}

if(isset($_POST['btn'])){

    if (empty($_POST["name1"])) {  
        $nameErr = "* Name is required";  
    } else {  

    $vname = input_data($_POST["name1"]);  
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z ]*$/",$vname)) {  
            $nameErr = "* Only alphabets and white space are allowed";  
        }  
    } 

    if ($_FILES["filetoupload"]["size"] == 0) {  
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


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <?php include 'sidebar.php';?>
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
            <!-- <div class="container-fluid pt-4 px-4 col-sm-12 col-xl-6">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div>
                </div>
            </div> -->

            <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Category : </h6>
                            <form enctype="multipart/form-data" method="post">

                            <span style="color:red;"> <?php echo $nameErr; ?> </span>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name1" id="inputEmail3">
                                    </div>
                                </div>

                            <span style="color:red;"> <?php echo $imgErr ?> </span>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose image for your category</label>
                                    <input class="form-control bg-dark" type="file" id="formFile" name="filetoupload">
                                </div>
                                <input type="submit" class="btn btn-primary m-2" name="btn" value="submit"></input>

                                </div>
                            </form>


            <!-- Blank End -->


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

<?php

if (isset($_POST['btn'])) {

    if($nameErr == "" && $imgErr == ""){

        $name = $_POST['name1'];
        $filepath = "images/" . $_FILES["filetoupload"]["name"];

        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
        $query = mysqli_query($a, "insert into category (name,image) VALUES ('$name','$filepath')");

        if ($query) {

            $result = mysqli_query($a, "create table $name (name varchar(20),price bigint(20),description varchar(50),image varchar(50),
            color varchar(20),dimention varchar(50),highlight varchar(200),type varchar(20),id bigint(10) AUTO_INCREMENT, primary key (id));");

            echo "<script>alert('Data Inserted')</script>";
            header('Location:index.php');
        } else {
            echo "Error !!";
        }

    }
}

?>