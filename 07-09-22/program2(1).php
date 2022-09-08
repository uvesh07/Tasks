<?php
    error_reporting(0);
if(!empty($_POST['check'])){


    // $mail = $_POST['mail'];
    // $pass = $_POST['pass'];

    setcookie("mail1",$_POST['mail'],time()+3600);
    setcookie("pass",$_POST['pass'],time()+3600);

    // if(!isset($_COOKIE["mail"]) && !isset($_COOKIE["pass"])){
    //     echo "Sorry, cookie is not found!";  
    // }
    // else{
        echo "Your Email is : " . $_POST["mail"] . "<br> Your Password is : " . $_POST["pass"]; 
    // }

    // setcookie("name","Uvesh",time()-60);
    // setcookie("mail","uvesh@gmail.com",time()-60);
    // print_r($_COOKIE);

}
?>