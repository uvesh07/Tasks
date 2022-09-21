<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <?php include('header.php'); ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
    
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
        <?php include('sidebar.php'); ?>
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
            <?php include('nav.php'); ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <?php
                $id = $_GET['id'];
                $tb = $_GET['product'];
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
                                            
                                        ?>
                                        <td><?php $f1 = $col['Field']; 
                                            echo $f1;
                                        ?></td>
                                        <td><?php
                                        if($col['Field'] == "image"){
                                            echo '<img src="' .$row["$f1"]. '" width="150px" height="120px">';
                                        }
                                        else{
                                            echo $row["$f1"]; 
                                        }
                                         ?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                           
                            <!-- <a href="additems.php?product=<?php echo $tb; ?>" class="btn btn-lg btn-primary rounded-pill m-2" name="addc"> Add Items </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
            <?php include('footer.php'); ?>
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