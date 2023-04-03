<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$numberToSearch = readline("Enter the value to search for in a numbers array:");
while(!is_numeric($numberToSearch) || !is_int((int)$numberToSearch)) {
    $numberToSearch = readline("Please enter integer to search for in the numbers array:");
}

echo (array_search($numberToSearch, $numbers) !== false) ? 'True' : 'False';




