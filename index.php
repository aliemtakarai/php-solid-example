<?php

require_once __DIR__ . '/vendor/autoload.php';

use Order\Order;
use Logger\Logger;
use Payment\CreditCardPayment;
use Notification\EmailNotification;
use Processor\PaymentProcessor;

// Create an order
$order = new Order(100.0);

// Set up dependencies
$logger = new Logger();
$paymentMethod = new CreditCardPayment(); // Swap with PayPalPayment or BankTransferPayment as needed
$notification = new EmailNotification();

// Process the payment
$paymentProcessor = new PaymentProcessor($paymentMethod, $notification, $logger);
$paymentProcessor->process($order);
