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

            <!-- Content start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <div class="col-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <div class="table-responsive">
                                    <table> 
                                        <tr>
                                            <?php
                                                $query = mysqli_query($a, "select * from category"); 
                                                    
                                                while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                                    <!-- this Loop is to print Categories on dashbord -->
                                            <td> <a href="product.php?name=<?php echo $row['name']; ?>"> <img src= <?php echo $row['image']; ?>  height=150 width=200 />
                                            <?php echo "<p> " . $row['name'] . "</p>"; ?> </a> <?php echo '<a href="delcat.php?name='.$row['name'].'">Delete</a>'; ?></td>


                                            <?php }?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- <button type="button" class="btn btn-lg btn-primary rounded-pill m-2" name="addc" onclick="location.href = 'addcategory.php';">Add Category</button> -->
                    </div>
                </div>
            </div>
            <!-- Contant End -->
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