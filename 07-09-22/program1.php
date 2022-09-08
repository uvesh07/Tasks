<html>
<head>
<title>program 1</title>
</head>
<body>
    <h1>Cookies in PHP</h1>
    <h2>Set cookies : </h2>

<?php

setcookie("name","Uvesh",time()+3600);
setcookie("mail","uvesh@gmail.com",time()+3600);

?>

<?php

    if(!isset($_COOKIE["name"]) && !isset($_COOKIE["mail"])){
        echo "Sorry, cookie is not found!";  
    }
    else{
        echo "Your Name is : " . $_COOKIE["name"] . "<br> Your Email is : " . $_COOKIE["mail"]; 
    }
    print_r($_COOKIE);
    // setcookie("name","Uvesh",time()-60);
    // setcookie("mail","uvesh@gmail.com",time()-60);

?>
</body>
</html>