<?php

define('NEW_CONSTANT', "Hello new Constant!");

$bool = true;
$float = 1.234;
$regInt = -1234;
$string = "I'm a string";

echo is_int($regInt); //if 1 then true
echo is_int($float); //false if nothing is printed

echo is_string($string);

echo defined('NEW_CONSTANT'); //checks if constant is defined