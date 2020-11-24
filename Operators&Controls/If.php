<?php

$people = ["Bruno", "Sam", "Wheat"];
$authors = [];

$count = count($people);
$authorCount = count($authors);

if($count > 0)
{
    echo "There is a total of $count people.";
}
else 
{
    echo "There are no authors";
}