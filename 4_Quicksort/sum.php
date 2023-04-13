<?php

/* в цикле
function sum($arr)
{
    $total = 0;
    foreach($arr as $x) {
        $total += $x;
    }
    return $total;
}
*/

// с применением рекурсивной функции
function sum($arr)
{
    if (count($arr) <= 0) {
        return 0;
    } else {
        return $arr[0] + sum(array_splice($arr, 1));
    }
}
