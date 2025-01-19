<?php
//factory pattern
/*Factory pattern is a creational design pattern that provides an interface for creating objects in a superclass, 
but allows subclasses to alter the type of objects that will be created.*/
// Product interface

// Step 1: Define an interface for Notification
interface Notification {
    public function send(string $to, string $message): void;
}

// Step 2: Create concrete classes implementing the Notification interface

// Email Notification
class EmailNotification implements Notification {
    public function send(string $to, string $message): void {
        echo "Sending Email to $to with message: $message\n";
    }
}

// SMS Notification
class SMSNotification implements Notification {
    public function send(string $to, string $message): void {
        echo "Sending SMS to $to with message: $message\n";
    }
}

// Push Notification
class PushNotification implements Notification {
    public function send(string $to, string $message): void {
        echo "Sending Push Notification to $to with message: $message\n";
    }
}

// Step 3: Create the Factory Class
class NotificationFactory {
    public static function createNotification(string $type): Notification {
        switch ($type) {
            case 'email':
                return new EmailNotification();
            case 'sms':
                return new SMSNotification();
            case 'push':
                return new PushNotification();
            default:
                throw new Exception("Notification type $type not supported.");
        }
    }
}

// Step 4: Use the Factory to create and use notifications

try {
    // Create an Email notification
    $notification = NotificationFactory::createNotification('email');
    $notification->send("example@example.com", "This is an email notification.");

    // Create an SMS notification
    $notification = NotificationFactory::createNotification('sms');
    $notification->send("1234567890", "This is an SMS notification.");

    // Create a Push notification
    $notification = NotificationFactory::createNotification('push');
    $notification->send("user123", "This is a push notification.");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
