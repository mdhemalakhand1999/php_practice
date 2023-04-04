<?php
trait NumberSeriesOne {
    function NumberSeriesA() {
        echo "Number Series A";   
    }
    function NumberSeriesB() {
        echo "Number Series B";
    }
}
class NumberSeries {
    use NumberSeriesOne;
    function NumberSeriesA() {
        echo "Printing Number Series A";   
    }
}
$ns = new NumberSeries();
$ns->NumberSeriesA();