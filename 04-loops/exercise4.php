<?php

//Create a non associative array with integers and print out only integers that divides by 3 without any left.

$numbers = [1, 3, 5, 6, 9, 10, 12, 15, 17];

for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i]%3 == 0) {
        echo $numbers[$i];
        echo PHP_EOL;
    }
}