<?php

class Customer {
    public $Name;
    public $Address;
    public $Affiliate = null;

    public function Customer($affiliate) {
        $this->Affiliate = $affiliate;
    }

    public function PlaceOrder($order, $storeOwner) {
        $total = $order->Total;

        $this->Affiliate->customers[] = $this;
        $this->Affiliate->Balance += ($total * 10 / 100);
        $this->Affiliate->upperAffiliate->Balance += ($total * 10 / 100);
        $storeOwner->Balance+= ($total * 85 / 100);
    }
}