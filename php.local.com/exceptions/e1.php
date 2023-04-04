<?php
class Student {
    function __construct($name, $age) {
        $this->name = $name;
        if($age<4) {
            throw new Exception("Too Young", 1001);
        } elseif($age>25) {
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}
try {
    $s = new Student('rahim', 38); //"Too Old", 1002
    echo "it will never display<br>";
} catch(Exception $e) {
    echo $e->getCode(). " : " .$e->getMessage()."<br>";
} finally {
    echo "It will run<br>";
}
