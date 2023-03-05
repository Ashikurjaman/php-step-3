<?php

$name=0;

if(isset($name) && is_numeric($name) || $name !=""){
    echo "value is set";
}else{
    echo "value is not set";
}

//isset is checking value
//is_numeric checking value its number ki nah