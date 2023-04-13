<?php
function copyDir($source, $destination) {
    $filecount = 0;
    $directoryCount = 1;
    $source = rtrim($source, "/");
    $destination = rtrim($destination, "/");
    if(!file_exists($destination)) {
        mkdir($destination);
        // mkdir($destination, 0777, true);
    }
    foreach(scandir($source) as $file) {
        if('.'!= $file && '..'!= $file) {
            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationPath = $destination.DIRECTORY_SEPARATOR.$file;
            if(is_dir($sourcePath)) {
                $directoryCount++;
                $result = copyDir($sourcePath, $destinationPath);
                $filecount += $result[0];
                $directoryCount += $result[1];
            } elseif(is_file($sourcePath)) {
                $filecount++;
                copy($sourcePath, $destinationPath);
            }
        }
    }
    return array($filecount, $directoryCount);
}

$source = getcwd().'/karx';
$destination = getcwd().'/target';
$fc = copyDir($source, $destination);
echo "Total {$fc[0]} files and directories {$fc[1]} been copyed";