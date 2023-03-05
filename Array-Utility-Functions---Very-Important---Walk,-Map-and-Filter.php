<?php
$a= [1,2,5,99,65,78,12,47,56,77];

/* function cube($a){
    return $a*$a*$a;
}

function even($a){
    return $a%2==0;
}
function odd($a){
    return $a%2==1;
}

// $newArray= array_map("cube",$a);
$evennumber= array_filter($a,'even');
$oddnumber= array_filter($a,'odd');
print_r($evennumber);
print_r($oddnumber); */
// print_r($newArray);

$numer1=range(40,70);
$random=mt_rand(0,30);
shuffle($numer1);

// $newrandom = shuffle($numer1);
print_r($numer1) ;

