<?php

//Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

class Person {
    var $name;
    var $surname;
    var $age;

    public function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
};

$man = new Person("Janis", "Berzins", 30);

function isAdult ($int) {
    if ($int >= 18) {
        echo "Congrats! You are an adult!";
    } else {
        echo "You are not an adult";
    }
};

isAdult ($man->age);