<?php

$authors = ["William", "Dave"];

$authorCount = count($authors);

switch($authorCount)
{
    case $authorCount == 0:
        echo "There are no authors";
        break;
    case $authorCount == 1:
        echo "There is one author";
        break;
    default:
        echo "There is a total of $authorCount people.";
        break;
}