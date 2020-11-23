<?php

$quote = "To be or not to be? That is the question";

$replaced = str_replace("be", "know", $quote);
//replaces the word with what we want it to be

//fourth parameter that we get back from function itself
$replaced = str_replace("be", "know", $quote, $count);

echo $replaced;

echo $count;