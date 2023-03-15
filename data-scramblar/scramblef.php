<?php
function displayKey($key) {
    printf('value = %s', $key);
}
function scrambleData($original_data, $key) {
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($original_data);
    for($i=0;$i<$length; $i++) {
        $currentChar = $original_data[$i];
        $position = strpos($originalKey, $currentChar);
        if($position !== false) {
            $data .= $key[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}
function decodeData($original_data, $key) {
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($original_data);
    for($i=0;$i<$length; $i++) {
        $currentChar = $original_data[$i];
        $position = strpos($key, $currentChar);
        if($position !== false) {
            $data .= $originalKey[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}