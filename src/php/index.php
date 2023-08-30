<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer-master/language/');
$mail->isHTML(true);

$mail->isSMTP();
$mail->Host= "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'arabkhon2322@gmail.com';
$mail->Password = 'ccuxdiqjolzzbetz';
$mail->Port = '587';
$mail->SMTPSecure = 'TLS';

$mail->setFrom("arabkhon2322@gmail.com", "code only the best");

$mail->addAddress('');
$mail->Subject = '';

$body = "<h1>Hi! it's Code Only</h1>";

if(trim(!empty($_POST['name']))){
    $body.= "<p>Name: <strong>".$POST['name']."</strong></p>";
};
if(trim(!empty($_POST['message']))){
    $body.= "<p>Message: <strong>".$POST['message']."</strong></p>";
};
if(trim(!empty($_POST['like']))){
    $body.= "<p>Do you like Code only? : <strong>".$POST['like']."</strong></p>";
};


if(trim(!empty($_FILES['image']['tmp_name']))){
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $mail->addAttachment($fileTmpName, $fileName);
};

$mail->Body = $body;

$mail->send();
$mail->smtpClose();


?>