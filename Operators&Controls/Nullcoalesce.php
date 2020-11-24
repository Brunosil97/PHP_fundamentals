<?php

$authors = ["William", "Dave"];

$authorCount = count($authors);

//is it true? has it been set and return
//good way to see if variables have been set
//if first is not set and second not set
$outcome = $authorCount ?? $randomVariable ?? "Count unavailable";

echo $outcome;