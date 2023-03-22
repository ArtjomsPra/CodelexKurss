<?php

//Every outcome in an array. Player selection is a key.
//The values are another array with the possible outcomes against computer selection.
$outcomes = [
    'rock' => ['scissors' => 'win', 'paper' => 'lose', 'rock' => 'tie', 'lizard' => 'win', 'spock' => 'lose'],
    'paper' => ['rock' => 'win', 'scissors' => 'lose', 'paper' => 'tie', 'lizard' => 'lose', 'spock' => 'win'],
    'scissors' => ['paper' => 'win', 'rock' => 'lose', 'scissors' => 'tie', 'lizard' => 'win', 'spock' => 'lose'],
    'lizard' => ['paper' => 'win', 'rock' => 'lose', 'scissors' => 'lose', 'lizard' => 'tie', 'spock' => 'win'],
    'spock' => ['paper' => 'lose', 'rock' => 'win', 'scissors' => 'win', 'lizard' => 'lost', 'spock' => 'tie']
];


$playAgain = 'Y';

while ($playAgain == 'Y') {
//Selecting random key for a computer selection from array outcomes
    $computerSelection = array_rand($outcomes);
    $playerSelection = '';
//While player doesnt select rock, paper or scissors from an array, it will ask him to enter his selection again.
    while(!in_array($playerSelection, ['rock', 'paper', 'scissors', 'lizard', 'spock'])){
        $playerSelection = strtolower(readline('Please enter your selection, rock, paper or scissors:'));
    }

    echo "Computer selected: $computerSelection\n";
    echo "You selected: $playerSelection\n";

    if ($outcomes[$playerSelection][$computerSelection] === 'win') {
        echo 'You win!';
    } elseif ($outcomes[$playerSelection][$computerSelection] === 'lose') {
        echo 'You lose!';
    } else {
        echo 'It\'s a tie!';
    }

    echo PHP_EOL;
    $playAgain = strtoupper(readline('Do you want to play again? (Y/N)'));
    while ($playAgain !== 'Y' && $playAgain !== 'N') {
        $playAgain = strtoupper(readline('Invalid option! Please enter Y or N: '));
    }
}

echo 'Thanks for playing!';


