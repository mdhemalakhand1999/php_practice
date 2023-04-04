<?php
define('OK', 123);
class myClass {
    const CITY = "Dhaka";
    function sayHI() {
        echo "Hi from ".$this::CITY;
        // echo "Hi from ".self::CITY;
    }
}
$m = new myClass();
// echo $m::CITY;
// echo myClass::CITY;
echo $m->sayHI();