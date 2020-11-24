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

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}

class Author extends Person
{
    public $penName = "Mark Twain";

    public function getPenName()
    {
        return $this -> penName;
    }

    public function getFullName()
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName;
    }
}

//$myObject = new Person("Bruno", "Silva", 1997 );
$newAuthor = new Author("Luis", "Wolton", 1997);
echo $newAuthor -> getFullName();
//echo $myObject -> getFullName();