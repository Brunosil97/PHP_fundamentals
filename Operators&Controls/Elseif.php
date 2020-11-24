<?php

$authors = ["William", "Dave"];

$authorCount = count($authors);

if($authorCount == 1)
{
    echo "There is one author";
}
elseif($authorCount > 1)
{
    echo "There is a total of $authorCount people.";
}
else
{
    echo "There are no authors";
}