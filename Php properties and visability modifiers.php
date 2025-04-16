<?php
class User {
    // Properties with different visibilities
    public $name;          // Accessible everywhere
    private $email;        // Accessible only inside this class
    private $password;  
    private $usertype = "Citizen";

    // Constructor 
    public function __construct($name, $email, $password) { 
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }   
    
    // Method to get user info
    public function getuserinfo() {
        return "Name: " . $this->name . " | Email: " . $this->email . " | Password: " . $this->password ;
    }
}

// Create User objects using 'new'
$user01 = new User("David", "David@gmail.com", "whatt |");
$user02 = new User("Samantha", "Samantha@gmail.com", "ereare |"); 
$user03 = new User("Emma", "Emma@gmail.com", "rradtfa |"); 

// Display user info
echo $user01->getuserinfo();
echo $user02->getuserinfo();
echo $user03->getuserinfo();

// Global scope
$globalUser = new User("Global", "global@test.com", "pass123");

function createUser() {
    // Function scope
    $localUser = new User("Local", "local@test.com", "pass456");
    return $localUser;
}

// Conditional scope
if (true) {
    $conditionalUser = new User("Conditional", "cond@test.com", "pass789");
}
?>