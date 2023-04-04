<?php

function guessTheNumber ($num){
    $number = rand(1, 100);
    if ($num == $number) {
        echo 'You guessed it!  What are the odds?!?';
    }
    else if ($num < $number) {
        echo "Sorry, you are too low.  I was thinking of $number";
    }
    else {
        echo "Sorry, you are too high.  I was thinking of $number.";
    }
}

guessTheNumber(readline('Please enter a number between 1 and 100 to guess:'));