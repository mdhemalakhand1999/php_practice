<?php
class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function eat() {
        echo "{$this->name} is eating <br/>";
    }
    public function run() {
        echo "{$this->name} is running <br/>";
    }
    public function sleep() {
        echo "{$this->name} is Sleeping <br/>";
    }
    public function greed(){}
    protected function addName($title) {
        $this->name = $title. " " .$this->name;
    } 
}
class Human extends Animal {
    public function greed() {
        $this->addName('MR. ');
        echo "{$this->name} Says HI <br/>";
    }
}
class Cat extends Animal {
    public function greed() {
        echo "{$this->name} is Meaw <br/>";
    }
}

$hemal = new Human('MD Hemal Akhand');
$hemal->eat(); 
$hemal->run(); 
$hemal->sleep(); 
$hemal->greed();
$cat = new Cat('Tom');
$cat->eat(); 
$cat->run(); 
$cat->sleep(); 
$cat->greed();