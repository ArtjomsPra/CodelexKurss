<?php


//Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object)
// Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
// Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = 'Janis';
$person->cash = '5000';
$person->licenses = ['A', 'B'];

//var_dump($person);

$knife = new stdClass();
$knife->name = 'Knife';
$knife->price = 500;
$knife->license = 'A';

$ak47 = new stdClass();
$ak47->name = 'Ak47';
$ak47->price = 1000;
$ak47->license = 'F';

$weapons = [
    'ak47' => $ak47,
    'knife' => $knife
];

$cash = $person->cash / 100;
$licenses = implode(',', $person->licenses);

echo "Welcome, {$person->name} $($cash) [$licenses]" . PHP_EOL;

foreach ($weapons as $weapon) {
    $price = $weapon->price / 100;
    echo "$weapon->name | $ $price | $weapon->license" . PHP_EOL;
}
$selection = readline('Please select weapon: ');

if (!array_key_exists($selection, $weapons)) {
    echo 'Weapon not found';
    exit;
}

$selectedWeapon = $weapons[$selection];

if(!in_array($selectedWeapon->license, $person->licenses)){
    echo 'Invalid licence';
    exit;
};

if($person->cash <= $selectedWeapon->price) {
    echo 'Net enough cash';
    exit;
};

$person->cash = $person->cash - $selectedWeapon->price;

echo PHP_EOL;
