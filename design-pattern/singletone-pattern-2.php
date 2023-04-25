<?php
class FileWritter {
    static $instance = [];
    private $filename;
    function __construct($filename) {
        $this->filename = $filename;
    }

    static function getInstance($filename=null) {
        if(!isset(self::$instance[$filename])) {
            self::$instance[$filename] = new FileWritter($filename);
        }
        return self::$instance[$filename];
    }
    function writeData($data) {
        echo "writing data to {$this->filename}<br/>";
    }
    static function dump() {
        echo "<pre>";
        print_r(self::$instance);
        echo "</pre>";
    }
}


$fw1 = FileWritter::getInstance("/tmp/abcd.txt");
$fw2 = FileWritter::getInstance("/tmp/abcd2.txt");
$fw3 = FileWritter::getInstance("/tmp/abcd3.txt")->writeData("something data 3");

$fw1->writeData('Some data');
$fw2->writeData('Some data 2');

FileWritter::dump();