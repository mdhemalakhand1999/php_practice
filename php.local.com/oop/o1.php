<?php
class Human {
    public $name;
    function sayHi() {
        echo "Salam <br/>";
    }
    function sayName() {
        echo "<br/>My name is {$this->name} <br/>";
    }
}
class Cat {
    function sayHi() {
        echo "Meow<br/>";
    }
}
class Dog {
    function sayHi() {
        echo "Woof<br/>";
    }
}
$h1 = new Human();
$h1->name = 'rubel';
echo $h1->name;
echo $h1->sayName();
$c1 = new Cat();
$d1 = new Dog();
$h1->sayHi();
$c1->sayHi();
$d1->sayHi();