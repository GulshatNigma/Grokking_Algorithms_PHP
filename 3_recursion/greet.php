<?php

function greet($name)
{
    print_r("Hello, " . $name . "!" . PHP_EOL);
    greet2($name);
    print_r("getting ready to say bye..." . PHP_EOL);
    bye();
}

function greet2($name)
{
    print_r("How are you, " . $name . "?" . PHP_EOL);
}

function bye()
{
    print_r("ok, bye!");
}