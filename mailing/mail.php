<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
$to = "hemalrika@gmail.com";
$from = "test@example.com";
$subject = "How is life";
$body = "<strong>Hello</strong><br/>কি খবর <br/>কেমন আছো ";
$body .= "<img src='https://images.unsplash.com/photo-1532962061234-081ffab437c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80' /> ";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=UTF-8\r\n";
$headers .= 'sendmail_path: "\"C:\xampp\sendmail\sendmail.exe\" -t"';
$headers .= "From: MD Hemal Akhand <{$from}> \r\n";
echo mail($to, $subject, $body, $headers);