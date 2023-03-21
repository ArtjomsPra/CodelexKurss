<?php


//Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object)
// Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
// Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

class Person {
    var $name;
    var $licences;
    var $cash;

    function __construct($name, $licences, $cash){
        $this->name = $name;
        $this->licences = $licences;
        $this->cash = $cash;
    }
}

$guns = array (
    array("name" => "USP", "licence" => "gunL", "price" => 350),
    array("name" => "Glock", "licence" => "gunL", "price" => 250),
    array("name" => "AK47", "licence" => "rifleL", "price" => 750),
    array("name" => "M16", "licence" => "rifleL", "price" => 650),
    array("name" => "M500", "licence" => "shotgunL", "price" => 500)
);

$buyer1 = new Person("Juris", array ("gunL", "rifleL"), 1250);
$buyer2 = new Person("Armands", array ("gunL", "shotgunL"), 1550);
$buyer3 = new Person("Jana", array ("rifleL", "shotgunL"), 1000);

function personCanBuyAGun ($person, $guns) {
    foreach ($guns as $gun) {
        if (in_array($gun["licence"], $person->licences)){
            return true;
        }
    }
    return false;
};

foreach ($guns as $gun) {
    if (personCanBuyAGun($person, $gun)) {
        echo $person->name . ' can buy a gun: ' . $gun["name"];
        echo PHP_EOL;
    } else {
        echo $person->name . ' can not buy a gun: ' . $gun["name"];
        echo PHP_EOL;
    }

};
