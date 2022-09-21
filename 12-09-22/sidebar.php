<?php
    include 'conn.php';
    session_start();
    $uid = $_SESSION['id'];

    $query = "select * from users where id='$uid'";
    $result = mysqli_query($a, $query);
    $row = mysqli_fetch_array($result);
?>

<nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <?php 
                        // echo $email;
                            // $query1 = "select * from users where email= ".$email;
                            // $result1 = mysqli_query($a,$query1);
                            // $row1 = mysqli_fetch_array($result1);
                        ?>
                        <img class="rounded-circle" src="<?php echo $row['pic']; ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            <?php echo $row['username']; ?>
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div> -->
                    <a href="addcategory.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Add Category</a>
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Users</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <?php
                            $query1 = mysqli_query($a, "select * from category");
                            while ($row = mysqli_fetch_array($query1)) {
                        ?>

                            <a href="product.php?name=<?php echo $row['name']; ?>" class="dropdown-item"><?php echo $row['name']; ?></a>

                        <?php } ?>    
                        </div>
                    </div>
                    <!-- <a href="signin.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>SignIn</a> -->
                    <!-- <a href="signup.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>SignUp</a> -->
                    <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item active">Blank Page</a>
                        </div>
                    </div> -->
                </div>
            </nav>