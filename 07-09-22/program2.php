<html>
<head>
<title>program 2</title>
</head>
<body>
    <h1>Cookies in PHP</h1>
    <h2>Set cookies from inputs: </h2>

    <form action="program2(1).php" method="post">
        <label for="mail">Enter your email : </label><input type="text" name="mail" value="<?php if(isset($_COOKIE["mail1"])) { echo $_COOKIE["mail1"]; } ?>"> <br> 
        <label for="pass">Enter your password : </label><input type="text" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"> <br> 
        <input type="checkbox" name="check"> Remember Me <br>
        <input type="submit" name="btn">
    </form>



</body>
</html>