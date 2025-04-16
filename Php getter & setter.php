<?php

class User {
    private $email;

    // Setter with validation
    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException("Invalid email!");
        }
    }

    // Getter
    public function getEmail() {
        return $this->email;
    }
}

// Usage
$user = new User();
$user->setEmail("example@gmail.com");
echo $user->getEmail(); // "example@gmail.com"