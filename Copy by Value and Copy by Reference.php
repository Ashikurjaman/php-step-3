<?php

/* $d= array(
    'fname'=>'jamanl','lname'=>'kamal')
;

$new = $d;
$new = &$d;  // sallow copy by reference this system copy memory address
$new ['lname']= 'jaman';  // this call deep copy by value
print_r($new) ;
print_r($d) ; */


var_dump(php_ini_loaded_file(), php_ini_scanned_files());