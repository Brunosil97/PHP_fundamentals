<?php

$authors = [
    "Male" => array(
        "Bruno" => array("boy1", "fef"),
        "Cem" => array("boy2", "feddfdf"), 
        "Bot" => array("boy3", "fefddsf")
    ),
    "Female" => array(
        "Louise" => array("girl1", "funny"),
        "Elouise" => array("girl2", "funny")
    )
];

print_r($authors); //prints as nested array
print_r($authors["Male"]["Bot"][0]);

