<?php

function droppingObject ($num1, $num2, $num3): float {
    $acceleration = 9.81;
    $time = $num1;
    $initialVelocity = $num2;
    $initialPosition = $num3;
    $endingPosition = $initialVelocity * $time * $initialPosition - 0.5 * $acceleration * $time^2;
    return $endingPosition;
}

var_dump(droppingObject(10, 0, 0));
