<?php

$fruits = array('mango','banana','grapes','cucumber','apple','dates');

// $newFurits= array_slice($furits,-5,-3);
// $newFruits= array_slice($fruits,2,-1,true);
// print_r($newFruits) ;


// array slice extract value from a array 


$newItems = array_slice($fruits,1,2,true);
$newItems2 = array_slice($fruits,3,4,true);

// $r=array_merge($newItems,$newItems2);
$r=$newItems + $newItems2;
print_r($r);
