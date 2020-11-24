<?php

include 'Person.php';
include_once 'Author.php';

$newAuthor = new Author("Luis", "Wolton", 1997);
echo $newAuthor -> getCompleteName();