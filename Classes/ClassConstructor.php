<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    public $firstName;
    public $lastName;
    public $yearBorn;

    //constructor
    public function __construct()
    {
        $this -> firstName = "Bruno";
        $this -> lastName = "Silva";
        $this -> yearBorn = 1997;
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

$myObject = new Person();
echo $myObject -> getFirstName();