<?php

namespace Payment;

// 2. Open/Closed Principle (OCP)
// Classes should be open for extension, but closed for modification.
interface PaymentMethod {
    public function pay(float $amount): void;
}
