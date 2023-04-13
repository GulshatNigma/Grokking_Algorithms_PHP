<?php

function findSmaller ($arr)
{
    $smallest = $arr[0];
    $smallest_index = 0;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

function selectionSort($arr)
{
    $newArr = [];
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        $smallest = findSmaller($arr);
        array_push($newArr, array_splice($arr, $smallest, 1)[0]);
    }
    return $newArr;
}