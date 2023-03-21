<?php


//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = array(
    array("name" => "apple", "weight" => 7),
    array("name" => "banana", "weight" => 12),
    array("name" => "pear", "weight" => 9),
    array("name" => "pineapple", "weight" => 21)
);

function isFruitOver10kg($fruit) {
    return $fruit["weight"] > 10;
};

$shippingCosts = array (
    "under10kg" => 1,
    "over10kg" => 2
);

foreach ($fruits as $fruit) {
    echo $fruit["name"];
    echo ' ';
    echo $fruit["weight"];
    echo ' ';
    if (isFruitOver10kg($fruit)) {
        echo "Shipping cost is: ";
        echo $shippingCosts["over10kg"];
    }
        else {
            echo "Shipping cost is: ";
            echo $shippingCosts["under10kg"];
        };
    echo PHP_EOL;
};



