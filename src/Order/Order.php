<?php

namespace Order;

// 1. Single Responsibility Principle (SRP)
// Each class has a single responsibility.
class Order {
    private $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function getAmount(): float {
        return $this->amount;
    }
}
