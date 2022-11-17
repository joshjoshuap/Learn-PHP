<?php

// Constructor
class Person
{
    public $name;
    public $age;
    public $address;

    function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    function display_info()
    {
        return 'Name: ' . $this->name . ' Age: ' . $this->age . ' Address: ' . $this->address;
    }
}

$person1 = new Person('Joshua', '22', 'Manila');
echo $person1->display_info();

// Inheritance
class School
{
    public $name;
    public $section;
    function school_greet()
    {
        return 'Welcome to Happy Unversity';
    }
}

class Student extends School
{


    function __construct($name, $section)
    {
        $this->name = $name;
        $this->section = $section;
    }

    function greet()
    {
        return 'Hello My Name is ' . $this->name . ' From ' . $this->section;
    }
}

$student1 = new Student('Joshua', '101 A');
echo $student1->school_greet(); // Welcome to Happy Unversity
echo $student1->greet(); // Hello My Name is Joshua From 101 A
