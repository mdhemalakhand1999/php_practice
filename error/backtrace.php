<?php
function x($a) {
    y($a);
}
function y($b) {
    z($b*2);
}
function z($c) {
    if($c<20) {
        trigger_error("Too Small {$c}");
    } else {
        echo "all is fine<br/>";
    }

    // debug_print_backtrace();
    print_r(debug_backtrace());
}
function w($d, $e) {
    x($d, $e);
}

w(2,3);
z(23);