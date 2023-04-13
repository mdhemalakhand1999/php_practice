<?php
trait NumberSeriesOne {
    function NumberSeriesA() {
        echo "Number Series A<br>";
        // parent::NumberSeriesA();
    }
    function NumberSeriesB() {
        echo "Number Series B<br/>";
    }
}
trait NumberSeriesTwo{
    function NumberSeriesC() {
        echo "Number Series C<br>";
        // parent::NumberSeriesA();
    }
    function NumberSeriesD() {
        echo "Number Series D<br/>";
    }
}
class SomeClass {
    function NumberSeriesA() {
        echo "Printing + Print Number Series A";   
    }
}
class NumberSeries extends SomeClass {
    use NumberSeriesOne, NumberSeriesTwo {
        // NumberSeriesA as NumberSeriesAA; // rename method
        NumberSeriesOne::NumberSeriesA as NumberSeriesAA; // rename method
        NumberSeriesTwo::NumberSeriesC as NumberSeriesCC; // rename method
    }
    function NumberSeriesA() {
        echo "Printing + Print Number Series A<br/>";   
    }
}
$ns = new NumberSeries();
$ns->NumberSeriesA();
$ns->NumberSeriesAA();
$ns->NumberSeriesCC();