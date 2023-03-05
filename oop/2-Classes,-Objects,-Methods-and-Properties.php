<?php

class Unique {
    public $name;

     function sayHello()
    {
            echo "Hello ";
            $this->sayName();
    }

    function sayName()
    {
         echo "My name is {$this->name}\n";
    }
}

$u = new Unique();
$y = new Unique();
$u->name = " Ashik";
$y->name = "lal";

$u->sayHello();
$y->sayHello();
// $u->sayName();
var_dump($u instanceof Unique);