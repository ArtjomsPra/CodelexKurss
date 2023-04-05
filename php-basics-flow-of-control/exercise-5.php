<?php

$string = readline("Enter a string: ");
$digits = "";

for ($i = 0; $i < strlen($string); $i++) {
    $char = strtoupper($string[$i]);

    switch ($char) {
        case "A":
            $digits .= "2";
            break;
        case "B":
            $digits .= "22";
            break;
        case "C":
            $digits .= "222";
            break;
        case "D":
            $digits .= "3";
            break;
        case "E":
            $digits .= "33";
            break;
        case "F":
            $digits .= "333";
            break;
        case "G":
            $digits .= "4";
            break;
        case "H":
            $digits .= "44";
            break;
        case "I":
            $digits .= "444";
            break;
        case "J":
            $digits .= "5";
            break;
        case "K":
            $digits .= "55";
            break;
        case "L":
            $digits .= "555";
            break;
        case "M":
            $digits .= "6";
            break;
        case "N":
            $digits .= "66";
            break;
        case "O":
            $digits .= "666";
            break;
        case "P":
            $digits .= "7";
            break;
        case "Q":
            $digits .= "77";
            break;
        case "R":
            $digits .= "777";
            break;
        case "S":
            $digits .= "7777";
            break;
        case "T":
            $digits .= "8";
            break;
        case "U":
            $digits .= "88";
            break;
        case "V":
            $digits .= "888";
            break;
        case "W":
            $digits .= "9";
            break;
        case "X":
            $digits .= "99";
            break;
        case "Y":
            $digits .= "999";
            break;
        case "Z":
            $digits .= "9999";
            break;
        case " ":
            $digits .= "0";
            break;
        default:
            break;
    }
}

for ($i = 0; $i < strlen($string); $i++) {
    $char = strtoupper($string[$i]);

    if ($char == "A") {
        $digits .= "2";
    } elseif ($char == "B") {
        $digits .= "22";
    } elseif ($char == "C") {
        $digits .= "222";
    } elseif ($char == "D") {
        $digits .= "3";
    } elseif ($char == "E") {
        $digits .= "33";
    } elseif ($char == "F") {
        $digits .= "333";
    } elseif ($char == "G") {
        $digits .= "4";
    } elseif ($char == "H") {
        $digits .= "44";
    } elseif ($char == "I") {
        $digits .= "444";
    } elseif ($char == "J") {
        $digits .= "5";
    } elseif ($char == "K") {
        $digits .= "55";
    } elseif ($char == "L") {
        $digits .= "555";
    } elseif ($char == "M") {
        $digits .= "6";
    } elseif ($char == "N") {
        $digits .= "66";
    } elseif ($char == "O") {
        $digits .= "666";
    } elseif ($char == "P") {
        $digits .= "7";
    } elseif ($char == "Q") {
        $digits .= "77";
    } elseif ($char == "R") {
        $digits .= "777";
    } elseif ($char == "S") {
        $digits .= "7777";
    } elseif ($char == "T") {
        $digits .= "8";
    } elseif ($char == "U") {
        $digits .= "88";
    } elseif ($char == "V") {
        $digits .= "888";
    } elseif ($char == "W") {
        $digits .= "9";
    } elseif ($char == "X") {
        $digits .= "99";
    } elseif ($char == "Y") {
        $digits .= "999";
    } elseif ($char == "Z") {
        $digits .= "9999";
    } elseif ($char == " ") {
        $digits .= "0";
    }
}

echo $digits;
