<?php

$number = trim(readline("Please enter a number:"));
while ($number < 0) {
    $number = trim(readline("Please enter a positive number:"));
}

$newArray = str_split($number);

echo "Your number has " . count($newArray) . " digits.";

