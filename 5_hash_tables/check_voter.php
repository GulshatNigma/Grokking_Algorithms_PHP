<?php

function check_voter($name)
{
    static $voted = [];
    if (array_key_exists($name, $voted)) {
        return "kick them out!";
    } else {
        $voted[$name] = true;
        return "let them vote!";
    }
}