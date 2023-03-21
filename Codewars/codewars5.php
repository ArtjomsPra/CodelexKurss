<?php
//Take 2 strings s1 and s2 including only letters from a to z.

// Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

$string = 'asdqqinwiufneowifqw';
$splitString = str_split($string);
sort($splitString);
//echo implode($splitString);

function longest($a, $b) {
    $onlyUniqueValues = array_unique(str_split($a . $b));
    sort($onlyUniqueValues);
    return implode($onlyUniqueValues);
}

longest('sadqeqdq', 'uibfniuwnfw');
