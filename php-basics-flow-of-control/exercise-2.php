<?php

$number = 0;

$number = readline("Please enter a number:");

if ($number < 0) {
    echo "The number is negative, why? Are you also negative?";
}
else if ($number > 0) {
    echo "The number is positive, that's nice, thanks for positive vibes!";
}
else {
    echo "Zero!? Really!? Nothing original to choose?";
}

