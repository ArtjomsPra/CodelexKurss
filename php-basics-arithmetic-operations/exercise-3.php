<?php

function produceTheSumOfNumberInterval($num1, $num2)
{

    $lower_bound = $num1;
    $upper_bound = $num2;

    $sum = 0;
    for ($i = $lower_bound; $i <= $upper_bound; $i++) {
        $sum += $i;
    }


    $average = $sum / ($upper_bound - $lower_bound + 1);

    echo "The sum of $num1 to $num2 is $sum\n";
    echo "The average is $average\n";
}

produceTheSumOfNumberInterval(1,100);