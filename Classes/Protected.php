<?php

class Person 
{
    const AVG_LIFE_SPAN = 80;

    protected $firstName;
    protected $lastName;
    protected $yearBorn;

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

class Author extends Person
{
    protected $penName = "Mark Twain";

    public function getPenName()
    {
        return $this -> penName;
    }

    public function getCompleteName()
    {    
        return $this->firstName." ".$this->lastName." a.k.a ".$this->penName;
    }
}

$newAuthor = new Author("Luis", "Wolton", 1997);
echo $newAuthor->getCompleteName();