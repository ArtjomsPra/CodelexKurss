<?php

//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50,
// "medium" if the case is higher than 50 but lower than 100,
// "high" if the value is >100.

$num = 10;

switch($num) {
    case $num < 50:
        echo 'Low';
        break;
    case $num > 50 && $num < 100:
        echo 'Medium';
        break;
    case $num > 100:
        echo "High";
        break;
    default:
        echo 'Please enter number';
}