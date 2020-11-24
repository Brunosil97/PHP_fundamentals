<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    private $firstName;
    private $lastName;
    private $yearBorn;

    //constructor
    public function __construct($firstName, $lastName, $yearBorn)
    {
        echo "person constructor".PHP_EOL;
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

    protected function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}