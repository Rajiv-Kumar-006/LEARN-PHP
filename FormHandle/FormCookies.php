<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cookies </h1>
    <?php

    $user = $_COOKIE["username"];
    $pass = $_COOKIE["password"];

    echo " user Name :" . $user . "<br>";
    echo "Password : " . $pass;
    ?>
</body>

</html>