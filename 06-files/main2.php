<?php

function whileLoop ($int) {
    while ($int < 10) {
        echo $int;
        echo ' ';
        $int++;
    }
};

function forLoop ($int) {
    for($i = 0; $i < 10; $i++){
        echo $int;
        echo ' ';
        $int++;
    }
};

function forEachLoop ($arrays) {
    foreach ($arrays as $array) {
        echo $array;
        echo ' ';
    }
};
