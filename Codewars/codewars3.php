<?php
//Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence,
// which is the number of times you must multiply the digits in num until you reach a single digit.

function persistence(int $num): int {
    $count = 0;
    if ($num < 10) {
        return $count;
    }
    else {
        while($num >= 10) {
            $newArray = str_split(strval($num));
            $sum = 1;
            for($i = 0; $i < count($newArray); $i++) {
               $sum = $sum * $newArray[$i];
            }
            $num = $sum;
            $count++;
        }
    }

    return $count;
}

echo persistence(39);
echo PHP_EOL;
echo persistence(729);