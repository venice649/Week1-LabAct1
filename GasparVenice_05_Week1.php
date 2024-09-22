<?php

// Define the Person class
class Person {
    public $firstName;
    public $lastName;
    private $age;

    // Constructor method to initialize properties
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Public method to return the full name of the person
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Public method to set the age
    public function setAge($age) {
        $this->age = $age;
    }

    // Public method to return the age
    public function getAge() {
        return $this->age;
    }
}

// Define the Car class
class Car {
    public $make;
    public $model;
    protected $year;

    // Constructor method to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Public method to return the car's make, model, and year
    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

// Create an instance of the Person class
$person = new Person('John', 'Doe', 25);

// Display the person's full name and age
echo 'Full Name: ' . $person->getFullName() . "\n";
echo 'Age: ' . $person->getAge() . "\n";

// Update the person's age
$person->setAge(20);
echo 'Updated Age: ' . $person->getAge() . "\n";

// Create an instance of the Car class
$car = new Car('Toyota', 'Camry', 2820);

// Display the car's information
echo 'Car Info: ' . $car->getCarInfo() . "\n";

?>