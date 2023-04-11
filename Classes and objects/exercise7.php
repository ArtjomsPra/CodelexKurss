<?php

class Dog {
    private $name;
    private $sex;
    private $mother;
    private $father;

    public function __construct ($name, $sex){
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = null;
        $this->father = null;
    }

    public function setFatherAndMother ($father, $mother) {
        $this->father = $father;
        $this->mother = $mother;
    }

    public function fathersName() {
        if ($this->father === null) {
            return "Unknown";
        } else {
            return $this->father->getName();
        }
    }

    public function getName() {
        return $this->name;
    }

    public function hasSameMotherAs($otherDog) {
        return $this->mother === $otherDog->getMother();
    }

    public function getMother() {
        return $this->mother;
    }

}

class DogTest {
    public static function main()
    {
        $dogMax = new Dog("Max", "Male");
        $dogRocky = new Dog("Rocky", "Male");
        $dogSparky = new Dog("Sparky", "Male");
        $dogBuster = new Dog("Buster", "Male");
        $dogSam = new Dog("Sam", "Male");
        $dogLady = new Dog("Lady", "Female");
        $dogMolly = new Dog("Molly", "Female");
        $dogCoco = new Dog("Coco", "Female");

        $dogMax->setFatherAndMother($dogRocky, $dogLady);
        $dogCoco->setFatherAndMother($dogBuster, $dogMolly);
        $dogRocky->setFatherAndMother($dogSam, $dogMolly);
        $dogBuster->setFatherAndMother($dogSparky, $dogLady);

        echo $dogCoco->fathersName() . PHP_EOL;
        echo $dogSparky->fathersName() . PHP_EOL;

        $hasSameMother = $dogCoco->hasSameMotherAs($dogRocky);
        echo $hasSameMother ? "true" : "false";
    }
}

DogTest::main();

