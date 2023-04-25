<?php

class Car {
    function getName() {
        echo "Car";
    }
}
class Truck {
    function getName() {
        echo "Truck";
    }
}
abstract class AbstractFactory {
    abstract function create();
}
class CarFactory extends AbstractFactory {
    public function create() {
        return new Car();
    }
}
class TruckFactory extends AbstractFactory {
    public function create() {
        return new Truck();
    }
}


class VehicleFactory {
    function getFactory($type='car') {
        if('car' == $type) {
            return new CarFactory();
        } elseif('truck' == $type) {
            return new TruckFactory();
        }
    }
}

$vh = new VehicleFactory();
$trackFactory = $vh->getFactory('truck');
$tf = $trackFactory->create();
$tf->getName();