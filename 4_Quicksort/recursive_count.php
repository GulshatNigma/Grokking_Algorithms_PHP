<?php

function recursive_count($arr, $count = 0)
{
    if (empty($arr)) {
        return $count;
    } else {
        $count += 1;
        return recursive_count(array_splice($arr, 1), $count);
    }
}