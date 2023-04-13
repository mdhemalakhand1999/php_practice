<?php
// rule: class directly modify kora jabe na
// class FileDisplay {
//     function Display($file, $fileType ) {
//         if('mp4' == $fileType) {
//             // display video player
//         } elseif('mp3' == $fileType) {
//             // display audio player
//         } else {
//             // display text file
//         }
//     }
// }
class FileDisplay {
    function display(FileInterface $file) {
        $file->display();
    }
}


interface FileDisplayInterface {
    function display();
};

class ImageFile implements FileDisplayInterface {
    function display() {
        // take neccessary stepts to display image
    }
}

class VideoFile implements FileDisplayInterface {
    function display() {
        // take neccessary stepts to display video
    }
}

class AudioFile implements FileDisplayInterface {
    function display() {
        // take necessary steps for display audio;
    }
}
$image = new ImageFile('abcd.jpg');
$video = new ImageFile('abcd.mp4.');
$audio = new AudioFile("a1.mp3");
$fd = new FileDisplay();
$fd->display($rd);
$fd->display($video);
$fd->display($audio);