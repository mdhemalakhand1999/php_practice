<?php
trait NumberSeriesOne {
    function NumberSeriesA() {
        echo "Number Series A";
        // parent::NumberSeriesA();
    }
    function NumberSeriesB() {
        echo "Number Series B";
    }
}
class SomeClass {
    function NumberSeriesA() {
        echo "Printing + Print Number Series A";   
    }
}
class NumberSeries extends SomeClass {
    use NumberSeriesOne;
    
}
$ns = new NumberSeries();
$ns->NumberSeriesA();