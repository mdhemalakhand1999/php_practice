<?php
class MotorCycle {
    private $parameters;
    function __construct($displacement, $capacity, $milage) {
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['milage'] = $milage;
    }
    // function getDisplacement() {
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement) {
    //     $this->parameters['displacement'] = $displacement;
    // }
    function __isset($name) {
        if(!isset($this->parameters[$name])) {
            echo "{$name} not found<br/>";
            return false;
        }
        return true;
    }
    function __unset($name) {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name) {
        echo $this->parameters[$name]; // this->displacement
    }
    function __set($name, $value) {
        echo $this->parameters[$name] = $value; // this->displacement
    }
    function __call($name, $arguments) {
        if('run' == $name) {
            if($arguments) {
                echo "I am running at {$arguments[0]}";
            } else{
                echo "I am runnig";
            }
        }
    }
    static function __callStatic($name, $arguments) {
        echo "Static call";
    }
}
Motorcycle::call();

$pulsar = new MotorCycle('150cc', '16ltr', '40kmph');
// if(isset($pulsar->tiresize)) {
//     echo 'Found';
// } else {
//     echo "Not found";
// }
// unset($pulsar->milage);
// $pulsar->run('100kmph');