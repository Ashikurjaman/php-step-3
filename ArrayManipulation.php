<?php
$students = [
    "rahim",
    "karim",
    123,
    "monir",
];



$students[1]="kajol"; 


// delete data in array
// $student = array_pop($students);
// $student = array_shift($students);

//add data in array
$student = array_unshift($students,"jamal");
$student = array_push($students,"kamal");
// echo $student;
$students[] ="jaman"; 

echo PHP_EOL;

$n=count($students);
for ($i=0; $i <$n ; $i++) { 
    # code...
    echo $students[$i]."\n";
}




//frist add in array= unshift
//last in add =push
//frist out of array = shift
//last out of array = pop