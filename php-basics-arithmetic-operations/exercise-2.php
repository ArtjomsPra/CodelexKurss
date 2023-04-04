<?php

function CheckOddEven($num) {
    if ($num % 2 == 0) {
        echo 'Even Number' . PHP_EOL;
    } else {
        echo 'Odd Number' . PHP_EOL;
    }
    echo 'bye!';
}

CheckOddEven(6);
