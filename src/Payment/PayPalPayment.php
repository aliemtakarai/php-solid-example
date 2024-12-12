<?php

namespace Payment;

class PayPalPayment implements PaymentMethod {
    public function pay(float $amount): void {
        echo "Paid $amount using PayPal." . PHP_EOL;
    }
}
