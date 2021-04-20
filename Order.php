<?php

class Order {
    public $Total;

    public function __construct($total) {
        $this->Total = $total;
    }
}