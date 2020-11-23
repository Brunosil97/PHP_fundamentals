<?php

$authors = array("Bruno", "Bot", "Cem");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare",
);

unset($authors[1], $authors[0]); //takes out elements

unset($authorsAssociative["brilliant"]);

print_r($authors);
print_R($authorsAssociative);