<?php

namespace Notification;

// 4. Interface Segregation Principle (ISP)
// Clients should not be forced to implement interfaces they don’t use.
interface Notification {
    public function send(string $message): void;
}
