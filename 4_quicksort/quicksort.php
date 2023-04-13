<?php

function quicksort($arr)
{
    if (count($arr) < 2) {
        return $arr;
    } else {
        $pivot = current($arr);
        $less = array_filter($arr, function ($num) use ($pivot) {
            return $num < $pivot;
        });
        
        $greater = array_filter($arr, function ($num) use ($pivot) {
            return $num > $pivot;
        });

        return array_merge(quicksort($less), [$pivot], quicksort($greater));
    }
}
