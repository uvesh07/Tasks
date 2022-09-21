<?php
include 'conn.php';
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
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center"> -->

            <?php
                $tb = "users";
                $result = mysqli_query($a, "select * from $tb") or die("Error in Query");
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($result)) {?>
                                    <tr>
                                    <td><img class="rounded-circle" src="<?php echo $row['pic']; ?>" alt="" style="width: 40px; height: 40px;"></td>
                                        <td><?php $id = $row['id'];
                                                    echo $id;?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td scope="col"><a href="edituser.php?id=<?php echo $id; ?>&tname=<?php echo $tb; ?>">Edit</a></td>
                                        <td scope="col"><a href="deluser.php?id=<?php echo $id; ?>&tname=<?php echo $tb; ?>">Delete</a></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    

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

          