<?php

$authors = array("Bruno","Cem", "Bot");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare",
);

sort($authors);
asort($authorsAssociative); //asort sorts by value and keeps key
ksort($authorsAssociative); //sorts by keys

print_r($authors);
print_r($authorsAssociative);