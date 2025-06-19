<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Number</title>
    <style>
        .btn {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Find the minimum number in an array</h1>

    <?php

    function findMin($arr)
    {
        $min = $arr[0];
        foreach ($arr as $val) {
            if ($val < $min) {
                return $min = $val;
            }
        }
        return $min;
    }

    $arr = [10, 25, 8, 91, 67];
    echo "Min Number : " . findMin($arr);
    ?>
    <div class="btn">

        <form action="sumOfAllNum.php" method="post">
            <button type="submit">Go to Next Page</button>
        </form>
        <form action="maxNum.php" method="post">
            <button type="submit">Go to back Page</button>
        </form>
    </div>


</body>

</html>