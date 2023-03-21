<?php
//Write a function that accepts an array of 10 integers (between 0 and 9),
// that returns a string of those numbers in the form of a phone number.

/*function createPhoneNumber($numbersArray) {
    implode($numbersArray);
    $newString1 = '(' . $numbersArray[0] . $numbersArray[1] . $numbersArray[2] . ')' . ' ';
    $newString2 = $numbersArray[3] . $numbersArray[4] .$numbersArray[5] . '-' . $numbersArray[6] . $numbersArray[7] . $numbersArray[8] . $numbersArray[9];
    return $newString1 . $newString2;
}*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
//echo $string = 'A beautiful life' . $array[1];

function createPhoneNumber(array $digits): string {
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}

echo createPhoneNumber($array);