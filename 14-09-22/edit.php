<?php
include 'conn.php';

$nameErr = $priceErr = $descErr = $imgErr = $colorErr = $dimErr = $highErr = $typeErr = "";

function input_data($data){

    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  

}

if(isset($_POST['btn'])){

    if (empty($_POST["sname1"])) {  
        $nameErr = "* Name is required";  
    } else {  

    $vname = input_data($_POST["sname1"]);  
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z -]*$/",$vname)) {  
            $nameErr = "* Only alphabets and white space are allowed";  
        }  
    } 

    if(empty($_POST["sprice"])) {  
        $priceErr = "* Price is required";  
    }

    if(empty($_POST["sdesc"])) {  
        $descErr = "* Description is required";  
    }  

    if($_FILES['filetoupload']['size'] == 0){

    }
        else {

            $vimage = $_FILES["filetoupload"]["type"];
            $allowed = array("image/jpg","image/jpeg","image/png","image/gif");  
            // check that the e-mail address is well-formed  
            if (!in_array($vimage,$allowed)) {  
                $imgErr = "* Invalid format. Only jpg / jpeg/ png /gif format allowed";  
            }
            
        }   
    

    if(empty($_POST["color"])) {  
        $colorErr = "* Color is required";  
    }
    
    if(empty($_POST["dimention"])) {  
        $dimErr = "* Dimention is required";  
    }

    if(empty($_POST["highlight"])) {  
        $highErr = "* Highlight is required";  
    }    

    if(empty($_POST["itype"])) {  
        $typeErr = "* Type is required";  
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
            <?php
                $id = $_GET['id'];
                $tb = $_GET['product'];
                $result = mysqli_query($a, "select * from $tb where id=$id") or die("Error in Query");
                $row = mysqli_fetch_array($result);
            ?>


            <div class="container-fluid pt-4 px-4">
                <div class="row vh-1000 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12">
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Item</h6>
                            <form enctype="multipart/form-data" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="sid" placeholder="name of item" value='<?php echo $row['id']; ?>' disabled>
                                    <label for="floatingInput">Item Id</label>
                                </div>
                            <span style="color:red;"> <?php echo $nameErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="sname1" placeholder="name of item" value='<?php echo $row['name']; ?>'>
                                    <label for="floatingInput">Item Name</label>
                                </div>
                            <span style="color:red;"> <?php echo $priceErr; ?> </span> 
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingPassword"
                                       name="sprice" placeholder="price of item" value='<?php echo $row['price']; ?>'>
                                    <label for="floatingPassword">Price </label>
                                </div>
                            <span style="color:red;"> <?php echo $descErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                       name="sdesc" placeholder="price of item" value='<?php echo $row['description']; ?>'>
                                    <label for="floatingPassword">Description </label>
                                </div>
                            <span style="color:red;"> <?php echo $imgErr; ?> </span>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Choose profile pic</label>
                                    <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file" name="filetoupload">
                                </div>
                            <span style="color:red;"> <?php echo $colorErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="color" placeholder="name of item" value = '<?php echo $row['color']; ?>'>
                                    <label for="floatingInput">Item Color</label>
                                </div>
                            <span style="color:red;"> <?php echo $dimErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                       name="dimention" placeholder="price of item" value = '<?php echo $row['dimention']; ?>'>
                                    <label for="floatingPassword">Dimensions </label>
                                </div>
                            <span style="color:red;"> <?php echo $highErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="highlight" placeholder="name of item" value = '<?php echo $row['highlight']; ?>'>
                                    <label for="floatingInput">Highlights</label>
                                </div>
                            <span style="color:red;"> <?php echo $typeErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="itype" placeholder="name of item" value = '<?php echo $row['type']; ?>'>
                                    <label for="floatingInput">Type</label>
                                </div>
                                <input type="submit" value="Update" name="btn" class="btn btn-primary m-2" >
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <?php

if (isset($_POST['btn'])) {

    if($nameErr == "" && $priceErr == "" && $descErr == "" && $imgErr == "" && $colorErr == "" && $dimErr == "" && 
        $highErr == "" && $typeErr == ""){

        // $sid = $_POST['nid'];
        $sname1 = $_POST['sname1'];
        $sprice = $_POST['sprice'];
        $sdesc = $_POST['sdesc'];

        if(!$_FILES['filetoupload']['size'] == 0){

            $filename = str_replace(" ","",$_FILES["filetoupload"]["name"]);
            $filepath = "images/" . $filename;
            move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $filepath);
        }
        else{
            $filepath = $row['image'];
        }
        $color = $_POST['color'];
        // echo $color;
        $dimention = $_POST['dimention'];
        // echo $dimention;
        $highlight = $_POST['highlight'];
        // echo $highlight;
        $itype = $_POST['itype'];
        // echo $itype;

        $result = mysqli_query($a, "update $tb set name='$sname1',price=$sprice,description='$sdesc',image='$filepath',
        color='$color',dimention='$dimention',highlight='$highlight',type='$itype' where id=$id");

        if ($result) {
            header("Location:product.php?name=$tb");
        } else {
            echo "Error in Inserting";
        }
    }
}
?>
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