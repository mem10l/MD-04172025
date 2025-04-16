<?php
// Define a class 
class Animal {
    public $name;

    // Function
    public function speak() {
        return "gun shot!";
    }
}

// Create an object
$dog = new Animal();
$dog->name = "Lucky";
echo $dog->speak();  // Output: "gun shot!"
?>