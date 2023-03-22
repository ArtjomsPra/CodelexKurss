<?php

do {
    $words = array('library', 'computer', 'empire', 'language', 'animal', 'science');
    $randomWord = $words[array_rand($words)];
    $maxGuesses = 6;
    $guesses = array();
    $misses = 0;
    $wordToGuess = str_split($randomWord);
    $display = array_fill(0, count($wordToGuess), '_');
    $playAgain = '';

//var_dump($display);
//var_dump($randomWord);

    while ($misses < $maxGuesses && in_array('_', $display)) {
        echo 'Word: ' . implode(' ', $display) . PHP_EOL;
        echo 'You have missed: ' . $misses . ' times out of ' . $maxGuesses . PHP_EOL;
        echo 'You have guessed: ' . implode(' ', $guesses) . PHP_EOL;

        $guess = strtolower(readline('Guess the letter:'));

        if (strlen($guess) != 1 || !ctype_alpha($guess)) {
            echo 'Invalid guess. Please enter a letter and try again!' . PHP_EOL;
            continue;
        }

        if (in_array($guess, $guesses)) {
            echo 'You have already tried the letter ' . $guess . '. Please enter a new guess letter.' . PHP_EOL;
            continue;
        }

        $isFound = false;
        foreach ($wordToGuess as $i => $letter) {
            if ($letter == $guess) {
                if ($display[$i] == $guess) {
                    echo "You have already found out that '$guess' is in the word. Please try a new letter!" . PHP_EOL;
                    $isFound = true;
                    break;
                } else {
                    $display[$i] = $guess;
                    $isFound = true;
                }
            }
        }

        if (!$isFound) {
            $misses++;
            array_push($guesses, $guess);
        }
    }

    if (!in_array('_', $display)) {
        echo 'Congratulations! You have won the game! The word was: ' . $randomWord . PHP_EOL;
    } else {
        echo 'Sorry, you have lost the game! The word was: ' . $randomWord . PHP_EOL;
    }


    while ($playAgain !== 'y' && $playAgain !== 'n') {
        $playAgain = strtolower(readline('Do you want to play again? Please enter Y or N: '));
    }

    //$playAgain = strtolower(readline('Do you want to play again? (Y/N)'));
} while ($playAgain == 'y');

echo 'Thanks for playing!' . PHP_EOL;