<?php
//In a small town the population is p0 = 1000 at the beginning of a year.
// The population regularly increases by 2 percent per year and moreover 50 new inhabitants per year come to live in the town.
// How many years does the town need to see its population greater or equal to p = 1200 inhabitants?

function nbYear($p0, $percent, $aug, $p) {
    $percent = $percent / 100;
    $count = 0;
    while($p0 < $p) {
        $p0 = $p0 + ($p0 * $percent) + $aug;
            $count++;
        $p0 = floor($p0);
        echo $p0 . ' ' . $count;
        echo PHP_EOL;
    }
    return $count;
}

//echo nbYear(1500, 5, 100, 5000);
//echo nbYear(1500000, 2.5, 10000, 2000000);
//echo nbYear(1500000, 2.5, -1000, 2000000);
//echo nbYear(1500000, 2.5, 1, 2000000);
//echo nbYear(1500000, 0, 10000, 2000000);
echo nbYear(1000, 2, 50, 1214);