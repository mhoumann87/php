<?php

include('class.account.php');

class CurrentAccount extends Account {

    private $overdraftLimit;

    function __construct($num, $name, $bal, $over) {

        $this->overdraftLimit = $over;
        parent::__construct($num, $name, $bal);
    }

    public function takeout($amount) {

        if ($this->accountBalance + $this->overdraftLimit > $amount ) {

            $this->accountBalance -= $amount;
            return "Overdraft limit: $this->overdraftLimit, withdraw: $amount, new balance: $this->accountBalance";
            
        }
    }

   
}