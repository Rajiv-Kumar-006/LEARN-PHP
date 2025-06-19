<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <style>
        .btn{
            display : flex;
            gap : 10px ;
            margin-top : 10px;
        }
    </style>
<body>
    <h1>Reverse the array</h1>

    <?php

    function reverseNum($arr){
        $rev = [];
        for ($i = count($arr) - 1; $i >= 0; $i--) {
       $rev[] = $arr[$i];
    }
    return $rev;
    }

    $arr = [10, 20, 5, 7, 25, 8, 91, 67];
    $reverse = reverseNum($arr);
  echo "Reverse numbers: ";
print_r($reverse);


    ?>

     <div class= " btn">
         <form action="average.php" method="post">
       <button type="submit">Go to Next Page</button>
    </form>
      <form action="sumOfAllNum.php" method="post">
       <button type="submit">Go to back Page</button>
    </form>
    </div>
</body>
</html>