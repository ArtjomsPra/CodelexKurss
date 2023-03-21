<?php

//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.

$num4 = 50;
$range1 = -150;
$range2 = 150;

if($num4 > $range1 && $num4 < $range2) {
    echo 'True';
}   else {
    echo 'False';
}