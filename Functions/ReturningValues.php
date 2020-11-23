<?php

function bookByAuthorYear($authorName, $tempYear = 1910)
{
    echo $authorName;
    echo "\n";
    echo $tempYear;
}

function getAuthor()
{
    return "Charles Dickens";
}

$authorName = "William Shakespeare";

$authorName = getAuthor(); //assigns result to variable

$year = 1920;
bookByAuthorYear($authorName);

