<?php

class Affiliate {
    public $Name;
    public $Balance = 0;
    public $upperAffiliate = null;
    public $subAffiliates = [];
    public $customers = [];

    public function Affiliate($name){
        $this->Name = $name;
    }

    public function Refer($subAffiliatesParam){
        $this->subAffiliates[] = $subAffiliatesParam;

        $subAffiliatesParam->upperAffiliate = $this;
    }

    public function Withdraw($money){

        if ($money > 100) {
            $this->Balance -= $money;

            echo "<p>Rút thành công $money$</p>";
        }
        else
            echo "<p>Không thể rút Balance < 100</p>";
    }

    public function PrintSubAff(){
        foreach ($this->subAffiliates as $subAff) {
            echo "<p>Name: $subAff->Name  - Balance: $subAff->Balance</p>";
        }
    }

    public function PrintCustomers(){
        foreach ($this->customers as $customer) {
            echo "<p>$customer</p>";
        }
    }

}