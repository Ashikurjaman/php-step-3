<?php

class RGB{

    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode=''){
        $this->color=ltrim($colorCode,"#");
        $this->parseColor();
    }

    function getColor($colorCode=''){
        $this->color=ltrim($colorCode,"#");
        // $this->parseColor();
        return $this->color;
    }

    function setColor(){
        // $this->color = ltrim($colorCode, "#");
        $this->parseColor();

    }

    private function parseColor(){
        if($this->color){
            $colors = sscanf($this->color, '%02x%02x%02x');
            print_r($colors);
        }
    }

}

$obj=new RGB();

$obj->getColor("ff0000");
$obj->setColor();

