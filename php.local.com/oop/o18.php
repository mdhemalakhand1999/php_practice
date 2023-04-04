<?php
class DistrictCollection implements IteratorAggregate {
    private $districts;
    function __construct() {
        $this->districts = array();
    }
    public function add($district) {
        array_push($this->districts, $district);
    }
    // function getDistricts() {
    //     return $this->districts;
    // }
    function getIterator() {
        return new ArrayIterator($this->districts);
    }
}
$districts = new DistrictCollection();
$districts->add("Rajsahi");
$districts->add("Bagura");
$districts->add("Sylet");
$districts->add("Chitagung");
$districts->add("Comilla");

// $_districts = $districts->getDistricts();
foreach($districts as $district) {
    echo $district. "<br/>";
}