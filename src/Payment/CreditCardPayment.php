<?php

namespace Payment;

class CreditCardPayment implements PaymentMethod {
    public function pay(float $amount): void {
        echo "Paid $amount using Credit Card." . PHP_EOL;
    }
}
