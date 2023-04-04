<?php
class Shape {
    
}
class Shapes {
    private $shapes;
    public function __construct() {
        $this->shapes = array();
    }
    public function addShape(Shape $shape) { // if Shape class exists as base class then only works
        array_push($this->shapes, $shape);
    }
    public function totalShapes() {
        return count($this->shapes);
    }

}
class Rectangle extends Shape{

}
class Triangle extends Shape {

}
class Student {

}
$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle());
$shapesCollection->addShape(new Triangle());
$shapesCollection->addShape(new Student());
echo $shapesCollection->totalShapes();