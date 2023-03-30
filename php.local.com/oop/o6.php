<?php
class parentClass {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
        $this->sayHi();
    }
    public function sayHi() {
        echo "Hi {$this->name} <br/>";
    }
}
class childClass extends parentClass {
    public function sayHi() {
        parent::sayHi();
        echo "Hellow <br/>";
    }
}
$class = new childClass('Hemal');