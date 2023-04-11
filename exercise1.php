<?php

class Product {
    private $name;
    private $price;
    private $amount;

    public function __construct(string $name, float $startPrice, int $amount) {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct() {
        echo "$this->name, price $this->price, amount $this->amount" . PHP_EOL;
    }

    public function changeQuantity(int $newAmount) {
        $this->amount = $newAmount;
    }

    public function changePrice(float $newPrice) {
        $this->price = $newPrice;
    }
}

$logitechMouse = new Product("Logitech mouse", 70.00, 14);
$iphone5s = new Product("iPhone 5s", 999.99, 3);
$epsonEBU05 = new Product("Epson EB-U05", 440.46, 1);

$logitechMouse->printProduct();
$iphone5s->printProduct();
$epsonEBU05->printProduct();

$iphone5s->changeQuantity(10);
$epsonEBU05->changePrice(359.99);

$iphone5s->printProduct();
$epsonEBU05->printProduct();