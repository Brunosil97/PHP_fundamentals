<?php

//$var1 = (6 < 7);
//$var2 = (8 == 8);

$var1 = true;
$var2 = false; 

var_dump($var1);
var_dump($var2);

//if both true then returns true: 'and' or '&&'
var_dump($var1 && $var2); //is my first true and is my second true

//The Or operator: 'or' or '||' 
var_dump($var1 || $var2);

//The Not operator: If its true, return false. If false, return true
var_dump(!$var1); //returns false 
var_dump(!$var2); //returns true