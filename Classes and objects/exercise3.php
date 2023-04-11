<?php

class FuelGauge {
    public int $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function printFuelAmount() {
        echo "Amount in the tank is $this->amount litres" . PHP_EOL;
    }

    public function fillItUp($int) {
        for($i = 0; $i < $int; $i++) {
            $this->amount = $this->amount + 1;
            if ($this->amount >= 70) {
                echo "The tank if full. It has $this->amount litres in it" . PHP_EOL;
                break;
            }
        }
    }

    public function usingTheFuel() {
        $this->amount = $this->amount - 1;
        if ($this->amount <= 0) {
            echo "The tank is empty. Tank has $this->amount litres in it" . PHP_EOL;
            break;
        }
    }
}

class Odometer {
    private int $mileage;
    private FuelGauge $fuelGauge;

    public function __construct($mileage, FuelGauge $fuelGauge) {
        $this->mileage = $mileage;
        $this->fuelGauge = $fuelGauge;
    }

    public function printMileageAmount() {
        echo "Mileage on the odometer is $this->mileage kilometres" . PHP_EOL;
    }

    public function odometerGoingUp() {
        $this->mileage = $this->mileage + 1;
        if ($this->mileage > 999999) {
            $this->mileage = 0;
        }
    }

    public function driving($kilometres, FuelGauge $fuelGauge)
    {
        for ($i = 0; $i < $kilometres; $i++) {
            $this->odometerGoingUp();
        }
        for ($j = 0; $j < $kilometres / 10; $j++) {
            $this->fuelGauge->usingTheFuel();
        }
    }
}

$tank = new FuelGauge(50);
$carsOdometer = new Odometer(1000, $tank);
$tank->fillItUp(35);
$tank->printFuelAmount();
$carsOdometer->driving(1500, $tank);
$tank->printFuelAmount();
$carsOdometer->printMileageAmount();
