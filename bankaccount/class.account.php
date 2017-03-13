<?php

class Account {

    protected $accountNumber;
    protected $accountHolder;
    protected $accountBalance;

    function __construct($num, $name, $bal) {

        $this->accountNumber = $num;
        $this->accountHolder = $name;
        $this->accountBalance = $bal;
    }

    public function withdraw($amount) {

        if ($accountBalance > $amount) {

            $accountBalance -= $amount;
            printBalance();
        }
    }

    public function deposit($amount) {

        $accountBalance += $amount;
        printBalance();
    }

    public function printBalance() {

        echo $accountNumber;
    }
}