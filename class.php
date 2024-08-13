<?php

class Person {
    public $firstName;
    public $lastName;

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function sayHello() {
        echo "Hello!! My name is " . $this->getFullName();
    }
}

// Object creation and setting properties
$person1 = new Person();
$person1->firstName = "Monu";
$person1->lastName = "Siddiki";

// Calling the method to say hello
$person1->sayHello();

?>
