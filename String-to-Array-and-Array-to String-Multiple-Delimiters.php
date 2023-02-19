<?php

//explode : string convert to array
$vegetable = explode(',','orange, apple, bannana, guava');
var_dump($vegetable) ;

//array convert to string
$veg = join(", ", $vegetable);
echo $veg;