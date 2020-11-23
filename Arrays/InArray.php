<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
    12
);

echo in_array("Jane Austin", $authors); //returns 1
echo in_array("Bruno", $authors); //returns false

//third parameter checks if type is the same

echo in_array("twelve", $authors, true); //returns false