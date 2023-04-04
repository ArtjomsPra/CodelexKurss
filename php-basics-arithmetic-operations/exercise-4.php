<?php

function factorial ($num) : int
{
    $sum = 1;
    for ($i = 1; $i <= $num; $i++) {
        $sum *= $i;
    }

    return $sum;
}

var_dump(factorial(10));