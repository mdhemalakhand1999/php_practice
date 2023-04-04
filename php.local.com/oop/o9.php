<?php
abstract class ourClass {
    public function sayHi() {
        echo "Hi";
    }
    abstract function eat();
}
class myClass extends ourClass {
    function sayHi() {
        echo "hello";
    }
    function eat() {
        echo "I am reading";
    }
}
$mc = new myClass();
$mc->eat();

// abstract function/method obossoi use korte hobe