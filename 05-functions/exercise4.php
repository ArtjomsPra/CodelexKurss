<?php


//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

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
$woman = new Person("Liga", "Ozolina", 35);
$kid = new Person("Arturs", "Zemitis", 15);

$personArray = array();
array_push($personArray,$man);
array_push($personArray,$woman);
array_push($personArray,$kid);
function isAdult ($array) {
    for($i = 0; $i < count($array); $i++) {
        if ($array[$i]->age >= 18) {
            echo "Congrats! You are an adult, ";
            echo $array[$i]->name;
            echo PHP_EOL;
        } else {
            echo "You are not an adult, ";
            echo $array[$i]->name;
            echo PHP_EOL;
        }
        }
    };

isAdult($personArray);

