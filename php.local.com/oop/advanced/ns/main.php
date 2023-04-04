<?php
namespace CloudStorage;
include "./mail/mailer.php";
include 'autoloader.php';
use \CloudStorage\Mail\Mailer;
use \CloudStorage\filesystem\files\contracts\images\Jpeg;
use \CloudStorage\FileSystem\Scanner;
class Main {
    function __construct() {
        $mailer = new Mail\Mailer();
        $mailer->sendMail();
        $scanner = new Scanner();
        $scanner->scan();
        $jpeg = new Jpeg();
        echo "<br>";
        echo $jpeg->getDimension();
    }
}

new Main();