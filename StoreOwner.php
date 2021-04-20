<?php

class StoreOwner {
    public $Name;
    public $Balance = 0;

    public function StoreOwner($name) {
        $this->Name = $name;
    }

    public function PrintBalance(){
        echo "balance của StoreOwner: " . $this->Balance;
    }
}