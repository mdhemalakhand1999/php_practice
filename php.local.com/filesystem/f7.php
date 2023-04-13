<?php
// pathinfo()
const FILENAME = "C:\xampp\htdocs\wp\onsafe\wp-mail.php";
echo pathinfo(FILENAME, PATHINFO_BASENAME)."<br/>";
// echo pathinfo(FILENAME, PATHINFO_DIRNAME)."<br/>";
// echo pathinfo(pathinfo(FILENAME, PATHINFO_DIRNAME), PATHINFO_BASENAME)."<br/>";
// echo pathinfo(FILENAME, PATHINFO_EXTENSION);
echo pathinfo(FILENAME, PATHINFO_FILENAME);