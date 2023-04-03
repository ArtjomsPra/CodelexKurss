<?php

$numbers = array();
$numbers2 = array();
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
    array_push($numbers2, $numbers[$i]);
    if ($i == 9) {
        $numbers[$i] = -7;
    }
}

$arrayToString = implode(',', $numbers);
$arrayToString2 = implode(',', $numbers2);

echo $arrayToString . PHP_EOL . $arrayToString2 . PHP_EOL;

