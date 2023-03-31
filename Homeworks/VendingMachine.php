<?php

class vendingItem {
    var $name;
    var $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
};

class vendingmachine {
    var array $items= [];

    public function __construct() {
        $this->items[] = new vendingItem("coffee", 150);
        $this->items[] = new vendingItem("lemonade", 125);
        $this->items[] = new vendingItem("snickers", 100);
        $this->items[] = new vendingItem("water", 90);
        $this->items[] = new vendingItem("cookie", 73);
        $this->items[] = new vendingItem("beer", 66);
    }
    public function displayItems() {
        echo 'These are the items that are available in our vending machine:' . PHP_EOL;
        foreach ($this->items as $item) {
            echo $item->name . ' - ' . $item->price . ' cents' . PHP_EOL;
        }
    }

    public function buy() {
        while (true) {
            $itemName = readline('Enter the name of the item you want to buy: ');
            $item = null;
            foreach ($this->items as $i) {
                if ($i->name === $itemName) {
                    $item = $i;
                    break;
                }
            }
            if ($item) {
                break;
            } else {
                echo 'Invalid item name. Please try again.' . PHP_EOL;
            }
        }

        $deposit = 0;
        while ($deposit < $item->price) {
            $coin = readline('Enter a coin (1, 2, 5, 10, 20, 50, 100, 200): ');
            if ($coin === '1' || $coin === '2'  || $coin === '5' || $coin === '10' || $coin === '20' || $coin === '50' || $coin === '100' || $coin === '200') {
                $deposit += intval($coin);
                $remaining = $item->price - $deposit;
                if ($remaining > 0) {
                    echo "Your current deposit into vending machine is $deposit cents. Item you want to buy $item->name and its price is $item->price. You still need $remaining cents." . PHP_EOL;
                } else {
                    $change = abs($remaining);
                    echo "You have bought $item->name for $item->price cents. Your change is $change cents, which is: ";
                    $coins = [200, 100, 50, 20, 10, 5, 2, 1];
                    foreach ($coins as $c) {
                        $count = 0;
                        while ($change >= $c) {
                            $change -= $c;
                            $count++;
                        }
                        if ($count > 0) {
                            echo "$count x $c cents, ";
                        }
                    }
                    echo PHP_EOL;
                    die;
                }
            } else {
                echo 'Invalid coin. Please try again.' . PHP_EOL;
            }
        }
    }
};


$vm = new vendingmachine();

$buy = 'y';

while($buy === 'y') {

    $buy = trim(strtolower(readline("Hello! Welcome to the crappiest vending machine ever. Do you want to buy something? Y or N: ")));
    while ($buy !== 'y' && $buy !== 'n') {
        $buy = trim(strtolower(readline("Please enter Y or N, other inputs are invalid, you moron!:")));
    }
    if ($buy === 'n') {
        die('Thank you for wasting our time! Have a shitty day, you asshole!');
    };

   $vm->displayItems();
   $vm->buy();
};
