<?php


//Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).

$arrayForAnExercise = [10, 5.3, 17, "Kurmis", 50];

for ($i = 0; $i < count($arrayForAnExercise); $i++) {
    doubleTheInteger($arrayForAnExercise[$i]);
};

function doubleTheInteger ($value) {
    if (is_integer($value)) {
        echo $value * 2;
        echo ' ';
    }
};





