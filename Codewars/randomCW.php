<?php

/* function printerError($s) {
    return strlen(preg_replace('/[a-m]/i', '', $s)) . '/' . strlen($s);
}
$s="aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
echo printerError($s);
*/

function binaryArrayToNumber($arr) {
    $sum = 0;
    $arrLength = count($arr);
    for ($i = 0; $i < $arrLength; $i++) {
        $sum += $arr[$i] * pow(2, $arrLength - $i - 1);
    }
    return $sum;
}

/*function binaryArrayToNumber(array $arr): int {
    return bindec(implode('', $arr));
}

echo binaryArrayToNumber([0,0,1,0]);
*/

function simpleMultiplication($number) {
    if ($number % 2 == 0) {
        return $number / 8;
    }
    else {
        return $number / 9;
    }
}

echo simpleMultiplication(16);