<?php
require_once("phpmailer/PHPmailer.php");
require_once("phpmailer/Exception.php");
require_once("phpmailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try {
    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->Host = "mail.hasin.me";
    $pm->SMTPAuth = true;
    $pm->Username = "test@hasin.com";
    $pm->Password = "--!F&7RZ@Kvh";
    $pm->SMTPSecure = "tls";
    $pm->Port = 587;
    
    $pm->setFrom("mail@hasin.me");
    $pm->addAddress("hemalrika@gmail.com");
    $pm->Subject = "Here is invoice";
    $pm->Body = "Hi, here is <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("D:\php-hasin-hayder\mailing\sick-poim.pdf");
    $pm->send();
    echo "Mail send";
} catch(Exception $e) {
    echo "Failed". $pm->ErrorInfo;;
}