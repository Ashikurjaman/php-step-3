<?php

class Student{
    public $name;
    const ROLL=65;

    public function test(){
    //    echo Student::ROLL;
        echo self::ROLL;
    }
}


// $obj = new Student();
// $obj->test();

echo Student::ROLL;