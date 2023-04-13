<?php

require_once 'Account.php';

$account = new Account('Artjoms account', 100);
$account->deposit(20);
$account->showAccount();

$mattsAccount = new Account('Matts account', 1000);
$myAccount = new Account('My account', 0);

$mattsAccount->withdraw(100);
$myAccount->deposit(100);

$mattsAccount->showAccount();
$myAccount->showAccount();

$account_a = new Account("A", 100.0);
$account_b = new Account("B", 0.0);
$account_c = new Account("C", 0.0);

$account_a->transfer($account_a, $account_b, 50.0);
$account_b->transfer($account_b, $account_c, 25.0);

$account_a->showAccount();
$account_b->showAccount();
$account_c->showAccount();