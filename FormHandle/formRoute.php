<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Form</title>
</head>

<body>
    <h1>Form Handle : 2</h1>
    <?php

    $user = $_POST['txtuser'];
    $pass = $_POST['txtpass'];
    echo " user Name :" . $user . "<br>";
    echo "Password : " . $pass;
    setcookie("username", $user, time() + (86400 * 30)); // 86400 = 1 day
    setcookie("password", $pass, time() + (86400 * 30)); // 86400 = 1 day
    ?>
</body>

<form action="FormCookies.php" method="post">
    <button type="submit">Go to Next Page</button>
</form>

</html>