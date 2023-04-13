<?php
trait MyTrait {
    static $number;
    abstract function sayHI();
}

class MyClassA {
    use MyTrait;
    function sayHI(){
        echo "<br/>HI";
    }
}
class MyClassB {
    use MyTrait;
    function sayHI(){
        echo "<br/>HI++";
    }
}
MyClassA::$number = 2;
MyClassB::$number = 8;
echo MyClassA::$number;

$ma = new MyClassA();
$ma->sayHI();
echo "<br/>";
echo MyClassB::$number;

