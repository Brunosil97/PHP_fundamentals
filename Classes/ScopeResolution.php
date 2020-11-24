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

class Author extends Person
{
    //creates static property
    public static $centuryPopular = "19th";
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this -> penName;
    }

    public function getCompleteName()
    {    
        return $this->getFullName()." a.k.a ".$this->penName;
    }

    public static function getCenturyAuthorWasPopular()
    {
        //static method - must be self contained - not relying on anything else but static
        //use self to return static properties
        //use parent instead of self to access parent static properties
        return self::$centuryPopular;
    }
}
//accessing public static property
//when static use dollar sign
echo Author::getCenturyAuthorWasPopular();