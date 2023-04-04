<?php
class Plannet {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}
$e = new Plannet("Earth");
$e2 = $e;
$e1 = new Plannet("Earth");
$m = new Plannet("Mars");
if($e === $e2) {
    echo "Similar Plannet";
} else {
    echo "Not Similar";
}