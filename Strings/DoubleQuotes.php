<?php

$currency = "penny";

//double quotes allows string interpolation
$sampleString = "A $currency saved is a $currency earned.";

echo $sampleString;

$var = 2;

echo $var."nd place"; //string concatonation

$misc = "St. Patrick's Day";

//single quote within double quote prints
//can use \ before double quote to print out within

echo $misc;