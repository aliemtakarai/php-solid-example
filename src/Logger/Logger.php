<?php

namespace Logger;

// 1. Single Responsibility Principle (SRP)
// Each class has a single responsibility.
class Logger {
    public function log(string $message): void {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}
