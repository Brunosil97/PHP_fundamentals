<?php

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