<?php

function recoursive_max($arr)
{
    if (empty($arr)) {
        return "The array is empty";
    }

    if (count($arr) === 1) {
        return $arr[0];
    }

    if ($arr[0] < $arr[1]) {
        return recoursive_max(array_splice($arr, 1));
    } else {
        unset($arr[1]);
        return recoursive_max(array_values($arr));
    }
}
