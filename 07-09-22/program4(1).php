<?php

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly <br>";

    echo "Email is : " . $_POST['username'] . "<br>";
    echo "Password is : " . $_POST['password'];

} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="program4.php"> Go to Login Page </a> </p>