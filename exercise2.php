<?php

class Point {
    private $xValue;
    private $yValue;

    public function __construct (int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints (object $p1, object $p2) {
        $xTime = $p2->x;
        $yTime = $p2->y;
        $p2->x = $p1->x;
        $p2->y = $p1->y;
        $p1->x = $xTime;
        $p1->y = $yTime;

    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")" . PHP_EOL;

$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")" . PHP_EOL;