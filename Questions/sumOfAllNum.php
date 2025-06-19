<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sum of All Number</title>
</head>
<style>
  .btn {
    display: flex;
    gap: 10px;
    margin-top: 10px;
  }
</style>

<body>
  <h1>Calculate the sum of all elements</h1>

  <?php

  function sumOfAllNum($arr)
  {
    $sum = 0;
    foreach ($arr as $num) {
      $sum = $sum + $num;
    }
    return $sum;
  }

  $arr = [10, 25, 8, 91, 67];
  echo "Sum of all number :" . sumOfAllNum($arr)

  ?>

  <div class=" btn">
    <form action="reverse.php" method="post">
      <button type="submit">Go to Next Page</button>
    </form>
    <form action="minNum.php" method="post">
      <button type="submit">Go to back Page</button>
    </form>
  </div>


</body>

</html>