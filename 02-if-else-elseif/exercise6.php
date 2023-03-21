<?php

//Create a variable $plateNumber that stores your car plate number.
// Create a switch statement that prints out that its your car in case of your number.

$plateNumber = 'MR7486';

switch($plateNumber){
    case 'MR7486':
        echo "Your plate number is $plateNumber";
        break;
    default:
        echo 'Entered plate number isnt yours';
}