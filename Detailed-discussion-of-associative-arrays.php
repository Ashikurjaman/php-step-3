<?php

// Associative array
$students = [
    "12" => 'jaman',
    "13"=> 'kamal',
    "14"=> 'somon',

];

// echo $students["14"];

// associatative array always key dea accept kora lagbe


$food =[
    'vegetables' => 'brangal, orange, apple, drinks',
    'furits'=>'a, b',
    "drinks"  => "water",
];

// echo count($food);

foreach ($food as $key => $value) {
    # code...
    echo $key."==".$value."\n";
}





