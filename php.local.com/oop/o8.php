<?php

abstract class Shape {
    abstract public function getArea();
    abstract public function getPremiter();
}
class Rectangle extends Shape {
    private $base, $height;
    function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    public function setBase($base) {
        $this->base = $base;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    function getArea() {
        return $this->base * $this->height;
    }
    function getPremiter() {}
}
class Triangle extends Shape {
    function getArea() {
    }
    function getPremiter() {}  
}
$triangle = new Triangle();
$triangle->getArea();