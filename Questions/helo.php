<?php
echo "Hello from test.php!";
$a=5;

$b=++$a; //6 ,  //5
echo "<br> b :".$b;

$c = $b--; //6
echo " <br> c :".$c;

$a = ++$b; //6
echo "<br> a :".$a;

$d = $a +  ++$a + $a++; //21
echo "<br> d :".$d ; 
$array=["1","2","3","6","1","2","3","8"];
$unique=array_unique($array);
print_r($unique); 

?>
