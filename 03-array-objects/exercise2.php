<?php

//Using dump method, dump out all 3 values.

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person);
var_dump($person["name"], $person["surname"], $person["age"]);