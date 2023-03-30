<?php
class Human {
    public $name;
    public $age;
    function __construct($name, $age=0) {
        $this->name = $name;
        $this->age = $age;
    }
    function sayName() {
        if($this->age) {
            echo "My name is {$this->name} and age is {$this->age}";
        } else {
            echo "My name is {$this->name} and age i don't know how old i am";
        }
    }
}
$h = new Human("Hemal", 30);
$h->sayName();