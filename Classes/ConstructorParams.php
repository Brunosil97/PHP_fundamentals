<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    public $firstName;
    public $lastName;
    public $yearBorn;

    //constructor
    public function __construct($firstName, $lastName, $yearBorn)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> yearBorn = $yearBorn;
    }
    //getter
    public function getFirstName()
    {
        return $this -> firstName;
    }

    //setter
    public function setFirstName($tempName)
    {
        $this -> firstName = $tempName;
    }
}

$myObject = new Person("Bruno", "Silva", 1997 );
echo $myObject -> getFirstName();