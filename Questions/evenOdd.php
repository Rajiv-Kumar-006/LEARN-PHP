<?php

function OddEven($n)
{
    if ($n % 2 == 0) {
        return 'Even';
    } else {
        return 'Odd';
    }
}

$arr = [3, 4, 5, 6, 8, 7, 9, 10];

foreach ($arr as $num) {
    echo OddEven($num) . " ";
}
