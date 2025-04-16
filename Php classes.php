<?php
// Define a class (blueprint)
class Animal {
    // Property
    public $name;

    // Method
    public function speak() {
        return "nigga!";
    }
}

// Create an object (instance)
$dog = new Animal();
$dog->name = "Buddy";
echo $dog->speak();  // Output: "Sound!"
?>