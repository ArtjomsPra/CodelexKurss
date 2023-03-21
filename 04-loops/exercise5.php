<?php

//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.

$persons = [
        "person1"=>["name" => "Janis",
                    "surname" => "Berzins",
                    "age" => 30,
                    "birthday" => 1993
        ],
        "person2"=>["name" => "Liga",
                    "surname" => "Ozolina",
                    "age" => 25,
                    "birthday" => 1998
        ]
];

foreach($persons as $person) {
    echo $person["name"];
    echo PHP_EOL;
    echo $person["surname"];
    echo PHP_EOL;
    echo $person["age"];
    echo PHP_EOL;
    echo $person["birthday"];
    echo PHP_EOL;
}