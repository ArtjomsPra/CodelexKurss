<?php
//The goal of this exercise is to convert a string to a new string where each character
// in the new string is "(" if that character appears only once in the original string,
// or ")" if that character appears more than once in the original string.
// Ignore capitalization when determining if a character is a duplicate.

function duplicate_encode($word) {
    $word = strtolower($word);
    $result = '';
    $char_count = array_count_values(str_split($word));
    foreach(str_split($word) as $char) {
        $result .= $char_count[$char] > 1 ? ')' : '(';
    }
    return $result;
}

echo duplicate_encode('star');
echo PHP_EOL;
echo duplicate_encode('staar');