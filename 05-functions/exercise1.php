<?php

//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
// Print this value out.

function addCodelex ($string) {
    echo $string . ' ' . 'codelex';
}

addCodelex('I like');
echo PHP_EOL;
addCodelex('I work with');