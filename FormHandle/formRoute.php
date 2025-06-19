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
   
    ?>
</body>

</html>