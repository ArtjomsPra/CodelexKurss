<?php

//Create a non-associative array with 3 integer values and display the total sum of them.

$numbers = [10, 30, 25];

echo $numbers[0] + $numbers[1] + $numbers[2];

$sum = 0;

foreach ($numbers as $number) {
    $sum = $sum + $number;
}
echo $sum;