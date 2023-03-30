<?php
$board = array(
    array(' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ')
);

function generateBoard(): array {
    $randomSymbols = [9, 10]; // 'J', 'Q', 'K', 'A', 'PR'
    $board = array();
    for ($i = 0; $i < 3; $i++) {
        $row = array();
        for ($j = 0; $j < 5; $j++) {
            if ($i == 0 && $j == 4 || $i == 1 && $j == 4 || $i == 2 && $j == 4) {
                $row[$j] = $randomSymbols[array_rand($randomSymbols)];
            } else {
                $row[$j] = $randomSymbols[array_rand($randomSymbols)] . " - ";
            }
        }
        $board[$i] = $row;
    }
    return $board;
}

function showBoard($board) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $board[$i][$j];
        }
        echo PHP_EOL;
    }
}

function didHeWin ($board, $bet, &$balance)
{
    $lines = array(
        array(array(0, 0), array(0, 1), array(0, 2), array(0, 3), array(0, 4)),
        array(array(1, 0), array(1, 1), array(1, 2), array(1, 3), array(1, 4)),
        array(array(2, 0), array(2, 1), array(2, 2), array(2, 3), array(2, 4)),
    );

    $win = false;

    foreach ($lines as $line) {
        $firstSymbol = $board[$line[0][0]][$line[0][1]];
        $match = true;
        for ($i = 0; $i < count($line); $i++) {
            if ($board[$line[$i][0]][$line[$i][1]] != $firstSymbol) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $win = true;
            break;
        }
    }

    if ($win) {
        $winAmount = $bet * 5;
        $balance += $winAmount;
        echo "Congratulations, you won $winAmount!" . PHP_EOL;
        echo "Your balance: $$balance" . PHP_EOL;
    } else {
        $balance -= $bet;
        echo 'Sorry, no win on any line.' . PHP_EOL;
        echo "You have $$balance left." . PHP_EOL;
        if ($balance <= 0 || $balance < $bet) {
            echo 'Your balance is to low to continue: ' . $balance . PHP_EOL;
            $continuePlaying = trim(strtolower(readline('Do you want to continue playing? Y or N:')));
            while ($continuePlaying !== 'y' && $continuePlaying !== 'n') {
                $continuePlaying = trim(strtolower(readline("Please enter Y or N, other inputs are invalid:")));
            }
            if ($continuePlaying === 'y') {
                $addedBalance = readline('Please enter balance that you wish to deposit in our slot machine:');
                while (!is_numeric($addedBalance) || !is_int((int)$addedBalance)) {
                    $addedBalance = readline('Please enter an integer number: ');
                }
                $balance += $addedBalance;
                if ($balance < $bet) {
                    $newBet = readline("Your new balance $$balance is lower than your previous bet $$bet. Please enter new bet amount:");
                    while (!is_numeric($newBet) || !is_int((int)$newBet) || $newBet > $balance) {
                        $newBet = readline('Please enter an integer number and bet lower than balance: ');
                    }
                    $bet = $newBet;
                }
            }
            else{
            echo "Thanks for playing! Your cashout is $balance";
            return false;}
        }
    }
    $playAgain = trim(strtolower(readline("Another spin? Y or N: ")));
    while ($playAgain !== 'y' && $playAgain !== 'n') {
        $playAgain = trim(strtolower(readline("Please enter Y or N, other inputs are invalid:")));
    }
    if ($playAgain === 'n') {
        echo 'Thank you for playing! Your cashout is $' . $balance . PHP_EOL;
        return false;
    }
    return true;

}

    $playAgain = trim(strtolower(readline("Hello and welcome to the shittiest slot machine ever! Do you want to play, enter Y or N: ")));
    while ($playAgain !== 'y' && $playAgain !== 'n') {
        $playAgain = trim(strtolower(readline("Please enter Y or N, other inputs are invalid:")));
    }
    if ($playAgain === 'n') {
        die('Thank you for visiting our shittiest slot machine ever! Have a good life you sucker!');
    }

    $balance = readline('Please enter balance that you wish to deposit in our slot machine:');
    while (!is_numeric($balance) || !is_int((int)$balance)) {
        $balance = readline('Please enter an integer number: ');
    }

    $bet = readline('Please enter amount that you wish to bet on every spin:');
    while (!is_numeric($bet) || !is_int((int)$bet)) {
        $bet = readline('Please enter an integer number: ');
    }

    if ($balance < $bet) {
        while ($balance < $bet) {
            $bet = readline('Please enter bet that is lower or equal to your balance:');
        }
    }

while (true) {
    $board = generateBoard();
    showBoard($board);
    $playAgain = didHeWin($board, $bet, $balance);
    if (!$playAgain) {
        break;
    }
}
