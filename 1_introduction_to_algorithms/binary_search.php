<?php

function binary_search($list, $item)
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = intval(($low + $high) / 2);
        $guess = $list[$mid];

        if ($guess === $item) {
            return $mid;
        }
        if ($guess < $item) {
            $low = $mid + 1;
        }
        if ($guess > $item) {
            $high = $mid - 1;
        }
    }
}

$list = [1, 3, 5, 7, 9];
print_r(binary_search($list, 3));
print_r(binary_search($list, -1));