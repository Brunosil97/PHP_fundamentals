<?php

function bookByAuthor($authorName, $bookName)
{
    echo $authorName;
    echo "\n";
    echo $bookName;
}

$authorName = "William Shakespeare";
$bookName = "Hamlet";
bookByAuthor($authorName, $bookName);