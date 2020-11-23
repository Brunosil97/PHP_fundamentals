<?php

function bookByAuthorYear($authorName, $tempYear = 1910)
{
    echo $authorName;
    echo "\n";
    echo $tempYear;
}

$authorName = "William Shakespeare";
$year = 1920;
bookByAuthorYear($authorName, $year);
bookByAuthorYear($authorName);