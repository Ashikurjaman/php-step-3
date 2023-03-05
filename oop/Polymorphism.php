<?php
interface Shape {
    public function calcArea();
  }

  class Circle implements Shape{

    private $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function calcArea(){
        echo $this->radius * $this->radius * pi();
    }
  }

  class Rectangle implements Shape{
    private $width;
    private $height;

    public function __construct($width, $height){
      $this->width = $width;
      $this->height = $height;
    }

    // calcArea 
    public function calcArea(){
        echo $this->width * $this->height;
   }
}

    $circle = new Circle(5);
	$rectangle = new Rectangle(5,3);

    $circle->calcArea();
    echo "\n";
    $rectangle->calcArea();