<?php

$newArray = array("school", "collage","madrasah",'university');

$a=count($newArray);
echo "\n";
// echo $newArray[1];

// array_push($newArray,'gram','bangla');
// print $newArray;

$new = array_shift($newArray);

for ($i=0; $i < $a; $i++) { 
    echo $newArray[$i]. "\n";
}

print_r($new) ;
