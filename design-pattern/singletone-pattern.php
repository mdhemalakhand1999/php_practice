<?php
// design pattern - singletone
class SomeClass {
    static $instance;
    private $name;
    function __construct($name=null) {
        echo "New instance created!<br/>";
        $this->name = $name;
    }
    static function getInstance($name=null) {
        if(!self::$instance) {
            if($name) {
                self::$instance = new SomeClass($name);
            } else {
            self::$instance = new SomeClass();
            }
        } else {
            echo "Old instance Supplied!<br/>";
        }
        return self::$instance;
    }
    function sayName() {
        echo "<br/>".$this->name;
    }
}
$sc = SomeClass::getInstance("Rahim");
$sc2 = SomeClass::getInstance("Karim");
$sc3 = SomeClass::getInstance();
$sc->sayName();
$sc2->sayName();