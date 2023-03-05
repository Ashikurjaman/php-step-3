<?php

class ParentClass{
    protected $name;


    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "what is the matter\n";
    }

}

class Child extends ParentClass {

    function sayHi(){
        echo "Hello\n";
        ParentClass::sayHi();
    }
}

$h1 = new child("Ashik");

$h1->sayHi();

