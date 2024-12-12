<?php

namespace Payment;

// 3. Liskov Substitution Principle (LSP)
// Subtypes must be substitutable for their base types.
class BankTransferPayment implements PaymentMethod {
    public function pay(float $amount): void {
        echo "Paid $amount using Bank Transfer." . PHP_EOL;
    }
}
