<?php

class Date
{
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year)
    {
        $this->setDate($day, $month, $year);
    }

    public function setDate($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function getDate() {
        return $this->day . $this->month . $this->year;
    }
    public function displayDate() {
        echo $this->day . '/' . $this->month . '/' . $this->year;
    }
}

$dateTest = new Date(10,04,2023);
$dateTest->setDate(11, 04, 2023);
$dateTest->displayDate();
$dateTest->getDate();
