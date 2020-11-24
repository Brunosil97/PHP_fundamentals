<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    public $firstName = "Bruno";
    public $lastName = "Silva";
    public $yearBorn = 1997;

    //getter
    public function getFirstName()
    {
        $this -> firstName;
    }

    //setter
    public function setFirstName($tempName)
    {
        $this -> firstName = $tempName;
    }
}

$myObject = new Person();
