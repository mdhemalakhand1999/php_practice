<?php
class Color {
    public $color;
    function __construct($color) {
        $this->color = $color;
    }
    function setColor($color) {
        $this->color = $color;
    }
}
class FavColor {
    public $data;
    public $color;
    function __construct($data, $color) {
        $this->data = $data;
        $this->color = new Color($color);
    }
    function setData($data) {
        $this->data = $data;
    }
    function updateColor($color) {
        $this->color->setColor($color);
    }
    function __clone() {
        $this->color = clone $this->color;
    }
}
$fc1 = new FavColor('Some Data', 'red');
// $fc2->setData('More Data');
print_r($fc1);
$fc2 = clone $fc1;
$fc2->updateColor('green');
print_r($fc1);
print_r($fc2);
// print_r($fc2);
