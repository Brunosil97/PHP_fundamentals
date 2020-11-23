<?php

$authors = [
    "Male" => array(
        "Bruno" => array("adf", "fef"),
        "Cem" => array("adfdf", "feddfdf"), 
        "Bot" => array("adddf", "fefddsf")
    ),
    "Females" => array(
        "Louise",
        "Elouise"
    )
    ];

//echo count($authors); //counts elements in array

echo count($authors, COUNT_RECURSIVE);