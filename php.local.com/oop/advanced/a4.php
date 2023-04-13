<?php
// method chaining
class StringUtitlity {
    private $string;
    private $search;
    function __construct($string) {
        $this->string = $string;
    }
    function search($string) {
        $this->search = $string;
        return $this;
    }
    function replace($string) {
        if(!isset($this->search)) {
            throw new Exception ("nothing to replace");
        }
        $this->string = str_replace($this->search, $string, $this->string);
        $this->search = '';
        return $this;
    }
    function upperCase() {
        $this->string = strtoupper($this->string);
        return $this;
    }
    function lowerCase() {
        $this->string = strtolower($this->string);
        return $this;
    }
    function print() {
        echo $this->string;
    }
}
$s = new StringUtitlity("Hello world");

$s->search("world")->replace("Earth")->search("Hello")->replace("Hi")->upperCase()->print();