<?php
// Procedural (messy)
$userName = "John";
$userEmail = "john@test.com";

function sendWelcomeEmail($email) {
    echo "Welcome email sent to $email";
}
sendWelcomeEmail($userEmail);

// OOP (organized)
class User {
    public function __construct(private $name, private $email) {}

    public function sendWelcomeEmail() {
        echo "Welcome email sent to {$this->email}";
    }
}

$user = new User("John", "john@test.com");
$user->sendWelcomeEmail();