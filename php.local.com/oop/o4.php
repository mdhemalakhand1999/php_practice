<?php
class RGB {
    private $colors;   
    private $red;   
    private $green;   
    private $blue;
    public function __construct($colorCode = '') {
        $this->colors = ltrim($colorCode, '#');
        $this->parseColor();
    }
    public function getColor() {
        return $this->colors;
    }
    public function getRGBColor() {
        echo "Red: {$this->red}, Green: {$this->green}, Blue: {$this->blue}";
    }
    public function setColor($colorCode) {
        $this->colors = ltrime($colorCode, '#');
    }
    private function parseColor() {
        if($this->colors) {
            list($this->red, $this->green, $this->blue) = sscanf($this->colors, "%02x%02x%02x");
        } else {
            list($this->red, $this->green, $this->blue) = array(0,0,0);
            print($colors);
        }
    }
}
$mycolor = new RGB('#00ff22');
$mycolor ->getRGBColor();