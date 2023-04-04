<?php
trait NumberSeriesOne {
    private function NumberSerisA() {
        echo "Number series a<br/>";
    }
    function NumberSeriesB() {
        $this->NumberSerisA();
        echo "Number series b<br/>";
    }
 }
trait NumberSeriesTwo {
    use NumberSeriesOne;
    function NumberSerisC() {
        echo "Number series c<br/>";
    }
    function NumberSeriesD() {
        $this->NumberSerisA();
        echo "Number series d<br/>";
    }
}

class NumberSeries {
    use  NumberSeriesTwo;
}

$ns = new NumberSeries();
// $ns->NumberSerisA();
$ns->NumberSeriesB();
$ns->NumberSeriesD();