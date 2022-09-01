<!DOCTYPE html>
<html lang="en">

<head>
    <title>Programe 2</title>
</head>

<body>
    <h1>Seconds to Hr & minuts & Seconds </h1>


    <?php

    $user = 74500;

    $hr = $user/3600;
    $user = $user%3600;
    $min = $user/60;
    $user = $user%60;
    $sec = $user;

    echo intval($hr).":".intval($min).":".intval($sec);

    ?>
</body>
</html>
