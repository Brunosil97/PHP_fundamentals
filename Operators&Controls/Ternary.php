<?php

$authors = ["William", "Dave"];

$authorCount = count($authors);

$outcome = ($authorCount > 0) 
    ? "There is a total of $authorCount author(s)" 
    : "There are no authors";

echo $outcome;