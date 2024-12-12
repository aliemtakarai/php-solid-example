<?php

namespace Notification;

class EmailNotification implements Notification {
    public function send(string $message): void {
        echo "Email sent: " . $message . PHP_EOL;
    }
}
