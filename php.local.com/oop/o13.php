<?php
class mathCalculator {
    private $number;
    static $name;
    static function fibunacchi($n) {
        echo self::$name;
        self::doSomething();
        echo "Fibonacchi seris up to {$n} \n";
    }
    static function doSomething() {
        echo "Doing Something \n";
    }
    function factorial($n) {
        self::$name = 'abcd';
        static::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating factorial of {$n} \n";
    }
}
$mathc = new MathCalculator();
mathCalculator::fibunacchi(7);
$mathc->factorial(8);
echo mathCalculator::$name;