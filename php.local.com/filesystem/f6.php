<?php
$size = 0;
$rdi = new RecursiveDirectoryIterator("../", RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($rdi);
foreach($files as $file) {
    if($file->isFile()) {
        $size += $file->getSize();
    }
    if($file->getFileName() == 'main.php') {
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."</br/>";
    }
    // echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."</br/>";
}

echo "Directory Size: ".$size." Bites";