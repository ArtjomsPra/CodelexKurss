<?php

//Program should display concatenated value of - Jane Doe 41

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

//var_dump($items[0][1]["name"]);

echo $items[0][0]["name"] . ' ' . $items[0][0]["surname"] . ' ' . $items[0][0]["age"];
echo PHP_EOL;
echo $items[0][1]["name"] . ' ' . $items[0][1]["surname"] . ' ' . $items[0][1]["age"];

