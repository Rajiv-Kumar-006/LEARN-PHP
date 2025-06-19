<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Form</title>
</head>

<body>
    <center>
        <h1>Form Handle : 1</h1>
        <form action="formRoute.php" method="post">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <th>password</th>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" value="Submit">Submit</button>
                        <button type="reset" value="Reset">Reset</button>
                    </td>

                </tr>
            </table>
        </form>
    </center>
</body>

</html>