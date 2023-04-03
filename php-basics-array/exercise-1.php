<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

$numbersIntoString = implode(",",$numbers);

echo "Original numeric array: $numbersIntoString" . PHP_EOL;

sort($numbers);

$sortedArray = implode(',', $numbers);


echo "Sorted numeric array: $sortedArray" . PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

$wordsIntoString = implode(",",$words);

echo "Original string array: $wordsIntoString" . PHP_EOL;

sort($words);

$sortedWords = implode(",",$words);

echo "Sorted string array: $sortedWords" . PHP_EOL;