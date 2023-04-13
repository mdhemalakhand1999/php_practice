<?php
// interface segregesion
interface Vehicle {
    function getMilage();
    function getName();
    function getPrice();
}

interface TwoTweelers {
    
}

interface FourTweelers {
    
}
interface SixTweelers {
    
}

class MotorCycle implements Vehicle, TwoTweelers {
    
    function getMilage(){}
    function getName(){}
    function getPrice(){}
}
class Truck implements Vehicle, SixTweelers {
    
}