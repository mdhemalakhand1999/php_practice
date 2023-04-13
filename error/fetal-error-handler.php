<?php
ini_set('display_errors', 0);
ini_set("memory_limit", '1M');
function fetal_error_handler() {
    $error = error_get_last();
    if($error) {
        echo "Fetal error";
    }
}
register_shutdown_function('fetal_error_handler');
echo str_repeat("*", 2**21);
// no_function();
