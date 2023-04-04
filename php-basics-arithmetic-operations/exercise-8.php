<?php
function calculatePay ($hours, $employee) {
    $basePay = 7.50;
    if ($employee = 'John') {
        $basePay = 8.20;
    }
    else if ($employee = 'Mike') {
        $basePay = 10.00;
    }
    if ($hours > 60) {
        die('Your hours exceeds Foo Corp limit of 60 hours a week.') . PHP_EOL;
    }
    else if ($hours > 40) {
        return $basePay * $hours + (($hours - 40) * 1.5) . PHP_EOL;
    }
    else{
        return $basePay * $hours . PHP_EOL;
    }
}

echo calculatePay(35, 'Donald');
echo calculatePay(47, 'John');
echo calculatePay(74, 'Mike');