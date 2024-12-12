# Payment Processing System

This project demonstrates a clean and modular implementation of the **SOLID principles** in PHP. The application is a simple payment processing system, showcasing a well-organized structure with support for multiple payment methods and notification systems.

---

## Features

- **Single Responsibility Principle (SRP):** Each class has a single responsibility, ensuring better maintainability.
- **Open/Closed Principle (OCP):** Adding new payment methods or notifications is easy without modifying existing code.
- **Liskov Substitution Principle (LSP):** Subtypes like `CreditCardPayment` can replace the `PaymentMethod` interface without breaking functionality.
- **Interface Segregation Principle (ISP):** Clients depend only on the methods they need through small, specific interfaces.
- **Dependency Inversion Principle (DIP):** High-level modules depend on abstractions rather than low-level implementations.

---

## Project Structure

```plaintext
/src
  /Payment
    PaymentMethod.php           # Interface for payment methods
    CreditCardPayment.php       # Payment via credit card
    PayPalPayment.php           # Payment via PayPal
    BankTransferPayment.php     # Payment via bank transfer
  /Notification
    Notification.php            # Interface for notifications
    EmailNotification.php       # Email-based notifications
  /Order
    Order.php                   # Represents an order
  /Logger
    Logger.php                  # Handles logging
  /Processor
    PaymentProcessor.php        # Processes payments
index.php                       # Entry point for the application
