<html>
<head>
<title>program 5</title>
</head>
<body>
    <h1>PHP passing Parameter value in function : </h1>

    <form action="" method="get">
        Enter your name : <input type="text" name="user">
        

        <input type="submit" name="btn">

    </form>

    <?php  
    if(isset($_GET['btn'])){
        function sayHello($name="Ram"){  
        echo "Hello $name<br/>";  
        }  
        $name = $_GET['user'];

        sayHello($name);  
        sayHello();//passing no value  
    }
    ?>

</body>
</html>