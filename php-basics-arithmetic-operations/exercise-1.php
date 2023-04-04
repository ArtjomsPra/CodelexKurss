<?php

function twoIntegers ($num1, $num2): bool {
    return ($num1 == 15 || $num2 == 15 || $num1 + $num2 == 15 || $num1 - $num2 == 15 || $num2 - $num1 == 15);
}

var_dump(twoIntegers(7,8));

