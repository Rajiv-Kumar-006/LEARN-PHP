<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .btn {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }
</style>

<body>
    <h1>Find the average of all elements</h1>

    <?php

    function averageNum($arr)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
        }
        $average = $sum / count($arr);
        return $average;
    }

    $arr = [10, 20, 5, 7, 25, 8, 91, 67];
    echo "Average: " . averageNum($arr);

    ?>


    <div class=" btn">
        <form action="average.php" method="post">
            <button type="submit">Go to Next Page</button>
        </form>
        <form action="sumOfAllNum.php" method="post">
            <button type="submit">Go to back Page</button>
        </form>
    </div>
</body>

</html>