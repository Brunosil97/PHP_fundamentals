<?php

$authors = array("Bruno", "Bot", "Cem");

//both add new value in array
array_push($authors, "Wheat");
$authors[] = "Andeev"; //perferred way

//pushing with a key
$authors["name"] = "Josh";

print_r($authors);
