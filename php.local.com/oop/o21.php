<?php
class Color {
    public $color;
    function __construct($color) {
        $this->color = $color;
    }
    function setColor($color) {
        $this->color = $color;
    }
    function __toString() {
        return "the color is {$this->color}";
    }
}
$c = new Color('red');
echo $c;