<?php
class A {
    public static $name;
    static function sayHi() {
        self::$name = 'hemal';
        echo "Hi From A <br/>";
    }

}
class B extends A {
    static function sayHi() {
        parent::sayHi();
        echo parent::$name;
        echo "Hi from B <br/>";
        
    }
}


B::sayHi();
echo B::$name;