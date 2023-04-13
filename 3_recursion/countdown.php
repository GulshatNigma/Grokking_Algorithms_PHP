<?php

function countdown($i)
{
    print_r($i . "...");
    if ($i <= 0) {
        return; // базовый случай
    } else {
        countdown($i - 1); // рекурсивный случай
    }
}