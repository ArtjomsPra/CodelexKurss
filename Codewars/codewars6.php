<?php
//Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
//
//It should remove all values from list a, which are present in list b keeping their order.

function arrayDiff($a, $b) {
    return $newArray = array_values(array_diff($a, $b));
}

$array1 = [1,2];
$array2 = [1];

var_dump (arrayDiff($array1, $array2));