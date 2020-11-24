<?php

include 'Person.php';
include_once 'Author.php';

//require will terminate at the point it cant find the file
require 'randomfilethatdoesntexist.php';

$newAuthor = new Author("Luis", "Wolton", 1997);
echo $newAuthor -> getCompleteName();