<?php
class A {
    private $name;
    static function sayHi() {
        $this::$name = 'hemal';
        echo "Hi From A <br/>";
    }

}
class B extends A {
    static function sayHi() {
        echo "Hi from B <br/>";
        parent::sayHi();
    }
}


B::sayHi();