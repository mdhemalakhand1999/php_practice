<?php
// echo getcwd(); //; get current working directory
$entries = scandir('D:\php-hasin-hayder\php.local.com');
foreach($entries as $entry) {
    if('.' != $entry && '..' != $entry) {
        if(is_dir($entry)) {
            echo "[d] {$entry}<br/>";
        } else {
            echo "[f] {$entry}<br/>";
        }
    }
}

function countDir($dir) {
    $count = 0;
    $entries = scandir($dir);
    foreach($entries as $entry) {
        if('.' != $entry && '..' != $entry) {
            if(is_dir($entry)) {
                $count++;
            }
        }
    }
    return $count;
}

echo countDir('D:\php-hasin-hayder\php.local.com');