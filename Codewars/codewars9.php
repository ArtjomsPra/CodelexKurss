<?php
//As the name may already reveal, it works basically like a Fibonacci, but summing the last 3 (instead of 2) numbers of the sequence
// to generate the next. And, worse part of it,
// regrettably I won't get to hear non-native Italian speakers trying to pronounce it :(

function tribonacci($signature, $n) {
    $num1 = $signature[0];
    $num2 = $signature[1];
    $num3 = $signature[2];
    $array = [];
    $counter = 3;
    if ($n == 0) {
        return $array;
    }
    else if ($num1 == $num2 && $num2 == $num3 && $num3 == $n) {
        array_push($array,$n);
        return $array;
    }
    else {
        while ($counter < $n) {
            $num4 = $num1 + $num2 + $num3;
            array_push($signature, $num4);
            $num1 = $num2;
            $num2 = $num3;
            $num3 = $num4;
            $counter++;
        }
        return $signature;
    }
}

function tribonacci2(array $signature, int $n): array {
    for ($i = $n - 3; $i > 0; $i--) {
        $signature[] = array_sum(array_slice($signature, -3));
    }
    return array_slice($signature, 0, $n);
}
var_dump (tribonacci2([1,1,3], 10));