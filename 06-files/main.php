<?php

$i = 3;
$arrays = [1, 2, 3, 4, 5];

    while ($i < 10) {
        echo $i;
        echo ' ';
        $i++;
    }



    for($i = 0; $i < 10; $i++){
        echo $i;
        echo ' ';
        $i++;
    }

    foreach ($arrays as $array) {
        echo $array;
        echo ' ';
    }

