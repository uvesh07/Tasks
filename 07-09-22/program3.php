<html>
<head>
<title>program 3</title>
</head>
<body>
    <h1>Cookies in PHP</h1>
    <h2>Set cookies : </h2>

    <?php
        error_reporting(0);



        if($_COOKIE['count']=='')
        {
            $a=1;
            setcookie('count',$a,time()+3600);
        }
        else
        {
            $b=$_COOKIE['count'];
            $b=$b+1;
            setcookie('count',$b,time()+3600);
            echo $_COOKIE['count']; 
            echo "<input type=submit name=submit formmethod=GET formaction=hello.php>";
        }
    ?>
</body>
</html>

