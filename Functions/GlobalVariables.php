<?php

$authorName = "Bruno Silva";


function setAuthorName()
{
    global $authorName; //only works in function
    //allows access inside of function
    $authorName = "Charles Dickens";
}

setAuthorName();

echo $authorName; 