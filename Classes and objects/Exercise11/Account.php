<?php

class Account {
    private string $name;
    private float $balance;

    public function __construct ($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit (int $amount) {
        $this->balance += $amount;
    }

    public function showAccount () {
        return "The $this->name has $$this->balance in balance" . PHP_EOL;
    }

    public function withdraw (int $amount) {
        $this->balance -= $amount;
    }

    public function transfer (Account $from, Account $to, int $howMuch) {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }
}
