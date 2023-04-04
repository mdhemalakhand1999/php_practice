<?php
function autoload($name) {
    if(strpos($name, "Planet_") !== false) {
        $filename = str_replace("Planet_", "", $name);
        include strtolower("./planet/{$filename}.php");
    } else {
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');

(new Bike)->getName();
(new Planet_Mars)->getName();
(new Spaceshit)->getName();