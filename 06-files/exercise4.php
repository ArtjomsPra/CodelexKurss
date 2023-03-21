<?php
//Using PHP in-built functions create a program that accepts 1 argument - filename.
//Create a file with the filename of your choice and store information with comma separated (example. John, Doe, 10)
//Using PHP in-built functions read information from this file and create an object based on information from the file.
//Output the name, surname and age of the person in the output.

//$myFile = fopen("main4.php", "r");

//var_dump($myFile);

$myFileGetContents = file_get_contents("main4.php");

//var_dump($myFileGetContents);

$person = explode(',', $myFileGetContents);

//$name = $person[0];
//$surname = $person[1];
//$age = $person[2];

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

$man = new Person($person[0], $person[1], $person[2]);

echo $man->name, $man->surname, $man->age;

