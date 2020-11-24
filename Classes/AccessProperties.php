<?php

class Person 
{
    public $firstName = "Bruno";
    public $lastName = "Silva";
    public $yearBorn = 1997;
}

$myObject = new Person();

//accessing property from class
echo $myObject -> firstName."\n";

$myObject -> firstName = "Luis";

echo $myObject -> firstName;