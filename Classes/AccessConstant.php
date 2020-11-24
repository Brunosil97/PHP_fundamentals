<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    public $firstName = "Bruno";
    public $lastName = "Silva";
    public $yearBorn = 1997;
}

$myObject = new Person();

echo Person::AVG_LIFE_SPAN;