<?php

class BankAccount
{
    private $name;
    private $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance() {
        $balance_formatted = number_format(abs($this->balance), 2, '.', ' ');
        $balance_prefix = ($this->balance < 0) ? '-$' : '$';
        return $this->name . ', ' . $balance_prefix . $balance_formatted . PHP_EOL;
    }

}

$ben = new BankAccount('Benson', 17.25);
echo $ben->show_user_name_and_balance();

$jan = new BankAccount('Janis', -11700.5);
echo $jan->show_user_name_and_balance();
