<?php
mkdir("Test/d1/d2/d3", 0777, true);
// mkdir("test");
// file_put_contents('test/f.txt', 'Hello');
// unlink('test/f.txt'); // remove file
// rmdir("test");
file_put_contents('test/f.txt', 'Hello');
file_put_contents('test/d1/f.txt', 'Hello');
file_put_contents('test/d1/d2/f.txt', 'Hello');
file_put_contents('test/d1/d2/f2.txt', 'Hello');

sleep(10);
deleteDir(getcwd().DIRECTORY_SEPARATOR.'test');
function deleteDir($path) {
    if(!is_readable($path)) {
        return;
    }
    $filesInPath = scandir($path);
    if(count(scandir($path)) > 2) {
        //not empaty
        foreach($filesInPath as $file) {
            if('.' != $file && '..' != $file) {
                $filePath = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($filePath)) {
                    deleteDir($filePath);
                } else {
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}