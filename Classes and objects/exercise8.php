<?php

class SavingsAccount
{
    private $balance;
    private $annual_interest_rate;
    private $total_deposits;
    private $total_withdrawals;
    private $total_interest;

    public function __construct($starting_balance) {
        $this->balance = $starting_balance;
        $this->annual_interest_rate = 0;
        $this->total_deposits = 0;
        $this->total_withdrawals = 0;
        $this->total_interest = 0;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return false;
        }
        $this->balance -= $amount;
        $this->total_withdrawals += $amount;
        return true;
    }
    public function deposit($amount) {
        $this->balance += $amount;
        $this->total_deposits += $amount;
    }

    public function addMonthlyInterest() {
        $monthly_interest_rate = $this->annual_interest_rate / 12;
        $monthly_interest = $this->balance * $monthly_interest_rate;
        $this->balance += $monthly_interest;
        $this->total_interest += $monthly_interest;
    }

    public function setAnnualInterestRate($rate) {
        $this->annual_interest_rate = $rate;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getTotalDeposits() {
        return $this->total_deposits;
    }

    public function getTotalWithdrawals() {
        return $this->total_withdrawals;
    }

    public function getTotalInterest() {
        return $this->total_interest;
    }
}

$balance = readline("How much money is in the account? ");
$interest_rate = readline("Enter the annual interest rate: ");
$months = readline("How long has the account been opened? ");

$savings_account = new SavingsAccount($balance);
$savings_account->setAnnualInterestRate($interest_rate);

for ($i = 1; $i <= $months; $i++) {
    $deposit = readline("Enter amount deposited for month $i: ");
    $savings_account->deposit($deposit);

    $withdrawal = readline("Enter amount withdrawn for $i: ");
    $savings_account->withdraw($withdrawal);

    $savings_account->addMonthlyInterest();
}

$total_deposits = number_format($savings_account->getTotalDeposits(), 2);
$total_withdrawals = number_format($savings_account->getTotalWithdrawals(), 2);
$total_interest = number_format($savings_account->getTotalInterest(), 2);
$ending_balance = number_format($savings_account->getBalance(), 2);

echo "Total deposited: $total_deposits" . PHP_EOL;
echo "Total withdrawn: $total_withdrawals" . PHP_EOL;
echo "Interest earned: $total_interest" . PHP_EOL;
echo "Ending balance: $ending_balance" . PHP_EOL;

