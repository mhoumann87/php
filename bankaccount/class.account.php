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

        if ($this->accountBalance > $amount) {

            $this->accountBalance -= $amount;
            return "Withdraw: $amount, new balance: $this->accountBalance";
        }
    }

    public function deposit($amount) {

        $this->accountBalance += $amount;
        return "Deposit: $amount, new balance: $this->accountBalance";
        
    }
}
   