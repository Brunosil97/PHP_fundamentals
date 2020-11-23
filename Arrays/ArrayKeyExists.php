<?php

$authors = array("Bruno Silva", "Sam Botrous", "Luis Wolton");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare",
);

echo array_key_exists(2, $authors);
echo $authors[2]; //gets luis
echo $authorsAssociative["brilliant"]; //gets Jane Austin