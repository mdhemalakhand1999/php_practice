<?php
// interface
interface baseAnimal {
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}
class Animal implements baseAnimal {
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}
interface baseHuman extends baseAnimal {
    function canTalk();
}


$h = new Human();
echo $h instanceof baseHuman;

abstract class AnstractHuman implements baseAnimal {
    abstract public function run();
    function eat() {
        echo "I am eating";
    }
}
class Human extends AnstractHuman {
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk() {}
}
$h = new Human();