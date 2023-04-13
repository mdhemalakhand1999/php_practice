<?php
class Mailer {
    function sendMail($to, $from, $subject, $message, $attachments) {

    }
    function connectMTA() {

    }
    function prepareMail() {}
    function dispatch() {}
}

class BetterMailer {
    function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment) {
        $this->mg = $mg;
        $this->mail = $mail;
        $this->attachment = $attachment;
    }

    function sendMail($to, $from, $subject, $message, $attachments) {
        $this->mail->attachment($attachments);
        $mailbody = $this->mail->prepare($to, $subject, $from, $message);
        $this->mg->connect();
        $this->mg->send($mailbody);
    }
}