<html>
    <head>
        <title>Admin Login : </title>
    </head>

    <body>
        <h1 style="align=centre">Admin login Panel : </h1>

        <form action="" method="get">
            <table>
            <tr> <td> <label for="">Enter Email : </label> </td> <td> <input type="text" name="email"> <td> </tr>
            <tr> <td> <label for="">Enter Password : </label> </td> <td> <input type="text" name="pass"> </td> </tr>
            <tr></tr>
            <tr><td><input type="submit" name="btn" value="login"></td></tr>
            </table>
        </form>


        <?php
            session_start();
            include 'conn.php';
            if(isset($_GET['btn'])){

                $email = $_GET['email'];
                $pass = $_GET['pass'];
                if($email == 'admin' && $pass == 123){
                    $_SESSION['mail'] = $email;
                    $_SESSION['pass'] = $pass;
                    // setcookie("mail",$email,time()+3600);
                    // setcookie("pass",$pass,time()+3600);
                    header('Location:admin.php');
                }
                else{
                    echo "Sorry you are not an Admin..";
                }

            }
        ?>
    </body>
</html>