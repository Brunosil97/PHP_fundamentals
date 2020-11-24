<?php

$people = ["Bruno", "Sam", "Wheat"];
$count = count($people);

if($count > 0) :
    echo "There is a total of $count people.";
else :
    echo "There are no authors";
endif;

$readingIsFun = true;

while($readingIsFun) :
    echo "Reading is fun!";
    $readingIsFun = false;
endwhile;

for($i = 0; $i <= 5; $i++) :
    echo $i;
endfor;