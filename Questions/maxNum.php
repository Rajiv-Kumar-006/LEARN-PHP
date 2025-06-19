<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the maximum number in an array </title>
</head>
<body>
  <h1>Find the maximum number in an array</h1>

  <?php

  function findMax($num){
      $max = $num[0];
    foreach($num as $val){

        if($val > $max){
            $max = $val;
        }
    }
    return $max;
  }

  $arr = [10, 25, 8, 91, 67];
  echo "Max Number :".findMax($arr)."<br>"."<br>";
   ?>
 <form action="minNum.php" method="post">
    <button type="submit">Go to Next Page</button>
</form>

</body>
</html>