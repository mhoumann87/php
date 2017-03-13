<?php

include('class.account.php');

class CurrentAccount extends Account {

    private $overdraftLimit;

    function __construct($num, $name, $bal, $over) {

        $this->overdraftLimit = $over;
        parent::__construct($num, $name, $bal);
    }

    public function withdraw($amount) {

        if (parent::$accountBalance() - $amount > $overdraftLimit) {

            parent::accountBalance() -= $amount;
            printBalance();
        }
    }

    public function printBalance() {

        echo parent::$accountBalance;
    }
}