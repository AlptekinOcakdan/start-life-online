<?php

function write($a)
{
    return $a;
}

if (function_exists("write")) {
    echo "Function exist";
} else {
    echo "Function doesn't exist";
}