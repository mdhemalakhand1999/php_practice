<?php
function customErrorHandler($serverity, $msg, $file, $line) {
    switch($serverity) {
        case E_WARNING:
            echo "Error [{$serverity} : {$msg} : in {$file} on line number {$line}]<br/>";
            break;
        case E_NOTICE:
            echo "Error [{$serverity} : {$msg} : in {$file} on line number {$line}]<br/>";
            break;
        default:
            echo "Error [{$serverity} : {$msg} : in {$file} on line number {$line}]<br/>";
            break;
    }
}

// set_error_handler('customErrorHandler');
// trigger_error("This is an error");
// echo substr([1,3,4,5], 3);

function division($divident, $divisor) {
    if($divisor == 0) {
        trigger_error("Cannot divide by 0");
    } else {
        return $divident/$divisor;
    }
}

echo division(8,0);