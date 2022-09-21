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

    if (empty($_POST["name1"])) {  
        $nameErr = "* Name is required";  
    } else {  

    $vname = input_data($_POST["name1"]);  
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z ]*$/",$vname)) {  
            $nameErr = "* Only alphabets and white space are allowed";  
        }  
    } 

    if(empty($_POST["price"])) {  
        $priceErr = "* Price is required";  
    }

    if(empty($_POST["desc"])) {  
        $descErr = "* Description is required";  
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
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-1000 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Items</h6>
                            <form enctype="multipart/form-data" method="post">
                            <span style="color:red;"> <?php echo $nameErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="name1" placeholder="name of item">
                                    <label for="floatingInput">Item Name</label>
                                </div>
                            <span style="color:red;"> <?php echo $priceErr; ?> </span>    
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingPassword"
                                       name="price" placeholder="price of item">
                                    <label for="floatingPassword">Price </label>
                                </div>
                            <span style="color:red;"> <?php echo $descErr; ?> </span>                                
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Item description"
                                       name="desc" id="floatingTextarea" style="height: 150px;"></textarea>
                                    <label for="floatingTextarea">Description</label>
                                </div>
                            <span style="color:red;"> <?php echo $imgErr; ?> </span>
                                <div class="mb-3">
                                <label for="formFileSm" class="form-label">Choose profile pic</label>
                                <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file" name="filetoupload">
                                </div>
                            <span style="color:red;"> <?php echo $colorErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="color" placeholder="name of item">
                                    <label for="floatingInput">Item Color</label>
                                </div>
                            <span style="color:red;"> <?php echo $dimErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword"
                                       name="dimention" placeholder="price of item">
                                    <label for="floatingPassword">Dimensions </label>
                                </div>
                            <span style="color:red;"> <?php echo $highErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="highlight" placeholder="name of item">
                                    <label for="floatingInput">Highlights</label>
                                </div>
                            <span style="color:red;"> <?php echo $typeErr; ?> </span>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                       name="itype" placeholder="name of item">
                                    <label for="floatingInput">Type</label>
                                </div>
                                <input type="submit" name="btn" class="btn btn-primary m-2" >
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

<?php
// error_reporting(0);
$tb = $_GET['product'];

// echo $tb;
if (isset($_POST['btn'])) {

    if($nameErr == "" && $priceErr == "" && $descErr == "" && $imgErr == "" && $colorErr == "" && $dimErr == "" && 
        $highErr == "" && $typeErr == ""){

        $name = $_POST['name1'];
        // echo $name;
        $price = $_POST['price'];
        // echo $price;
        $desc = $_POST['desc'];
        // echo $desc;
        $filename = str_replace(" ","",$_FILES["filetoupload"]["name"]);
        $filepath = "images/" . $filename;
        // echo $filepath;
        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $filepath);
        $color = $_POST['color'];
        // echo $color;
        $dimention = $_POST['dimention'];
        // echo $dimention;
        $highlight = $_POST['highlight'];
        // echo $highlight;
        $itype = $_POST['itype'];
        // echo $itype;

        $query = "insert into $tb(name,price,description,image,color,dimention,highlight,type) values('$name',$price,'$desc','$filepath',
        '$color','$dimention','$highlight','$itype')";
        // echo $query;
        $result = mysqli_query($a, $query);
        echo $result;
        if ($result) {
            header("Location:product.php?name=$tb");
        } else {
            echo "Error in inserting";
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


    <!-- insert into Electronics(name,price,description,image,color,dimention,highlight,type) values('Realme',17000,'Realme 7','images/realme7.jpg',
        'blue','162.3 x 75.4 x 9.4 mm','Coming to the display, the Realme 7 comes with a bigger 6.5-inch super AMOLED display.','smartphone'); -->

    <!-- insert into Clothes(name,price,description,image,color,dimention,highlight,type) values('jeans',2300,'Levis jeans','images/levis.jpg',
    'gray','34 inch X 30 inch','Get straight to your summer mood with our 70s inspired.','Top wear'); -->