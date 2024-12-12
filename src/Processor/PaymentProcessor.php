<?php

namespace Processor;

use Payment\PaymentMethod;
use Notification\Notification;
use Logger\Logger;
use Order\Order;

// 5. Dependency Inversion Principle (DIP)
// High-level modules should depend on abstractions, not on low-level modules.
class PaymentProcessor {
    private PaymentMethod $paymentMethod;
    private Notification $notification;
    private Logger $logger;

    public function __construct(PaymentMethod $paymentMethod, Notification $notification, Logger $logger) {
        $this->paymentMethod = $paymentMethod;
        $this->notification = $notification;
        $this->logger = $logger;
    }

    public function process(Order $order): void {
        $this->logger->log("Processing order for amount: " . $order->getAmount());
        $this->paymentMethod->pay($order->getAmount());
        $this->notification->send("Payment of " . $order->getAmount() . " was successful.");
    }
}
