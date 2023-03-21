<?php
//Write a function that takes in a string of one or more words, and returns the same string,
// but with all five or more letter words reversed (Just like the name of this Kata).
// Strings passed in will consist of only letters and spaces.
// Spaces will be included only when more than one word is present.

function spinWords(string $str): string {
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (strlen($word) >= 5) {
            $word = strrev($word);
        }
    }
    return $result = implode(' ', $words);
}

$string = 'Welcome';
echo spinWords($string);
