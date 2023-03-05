<?php
$a= [1,2,5,99,65,78,12,47,56,77];
$b=[11,14,15,24,17,36,99,65,56,77];



$common= array_intersect($a,$b);
print_r($common);

$diff= array_diff($b,$a);
print_r($diff);