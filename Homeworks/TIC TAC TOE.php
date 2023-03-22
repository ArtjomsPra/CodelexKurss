<?php

$board = array(
    array(' ', ' ', ' '),
    array(' ', ' ', ' '),
    array(' ', ' ', ' ')
);

function renderBoard($board) {
    echo "\n";
    echo " " . $board[0][0] . " | " . $board[0][1] . " | " . $board[0][2] . "\n";
    echo "-----------\n";
    echo " " . $board[1][0] . " | " . $board[1][1] . " | " . $board[1][2] . "\n";
    echo "-----------\n";
    echo " " . $board[2][0] . " | " . $board[2][1] . " | " . $board[2][2] . "\n";
}

function isGameOver($board):bool {
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2] && $board[$i][0] != ' ') {
            return true;
        }
    }
    for ($j = 0; $j < 3; $j++) {
        if ($board[0][$j] == $board[1][$j] && $board[1][$j] == $board[2][$j] && $board[0][$j] != ' ') {
            return true;
        }
    }
    if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2] && $board[0][0] != ' ') {
        return true;
    }
    if ($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0] && $board[0][2] != ' ') {
        return true;
    }

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] == ' ') {
                return false;
            }
        }
    }
    return false;
}

function makeMove($board, $player)
{
    while (true) {
        $move = trim(readline("Please player $player make your move: "));
        if (strlen($move) != 2) {
            echo "Please enter two digits, one for row and one for column between 0 and 2. \n";
            continue;
        }

        $col = intval(substr($move, 0, 1));
        $row = intval(substr($move, 1, 1));

        if ($row < 0 || $row > 2 || $col < 0 || $col > 2) {
            echo "Invalid move. Please enter a row and column between 0 and 2.\n";
            continue;
        }
        if ($board[$row][$col] != ' ') {
            echo "That cell is already occupied. Please choose another.\n";
            continue;
        }
        $board[$row][$col] = $player;
        break;
    }
    return $board;
}


function playGame() {
    do {
        $board = array(
            array(' ', ' ', ' '),
            array(' ', ' ', ' '),
            array(' ', ' ', ' ')
        );
        $player = 'X';
        while (!isGameOver($board)) {
            renderBoard($board);

            $board_filled = true;
            foreach ($board as $row) {
                foreach ($row as $symbol) {
                    if ($symbol == ' ') {
                        $board_filled = false;
                        break 2;
                    }
                }
            }

            if ($board_filled) {
                echo "The board is completely filled and we have no winner! It's a tie!";
                break;
            }

            $board = makeMove($board, $player);
            $player = ($player == 'X') ? 'O' : 'X';
        }

        if (isGameOver($board)) {
            renderBoard($board);
            $winner = ($player == 'X') ? 'O' : 'X';
            echo "Game over. The winner is player $winner!\n";
        }

        $playAgain = '';
        while ($playAgain !== 'y' && $playAgain !== 'n') {
            $playAgain = strtolower(readline('Do you want to play again? Please enter Y or N: '));
        }
    } while ($playAgain == 'y');
}

playGame();