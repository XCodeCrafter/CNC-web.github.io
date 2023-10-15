<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$phone = $_POST["number"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "Zmelik.Milltronics@gmail.com";
$mail->Password = "pyuf zkdd rifm pgwx";

$mail->setFrom($email, $name);
$mail->addAddress("Zmelik.Milltronics@gmail.com", "Lukas");

$mail->Subject = $subject;
$mail->Body = $message;
$mail->Body = "Name: {$name} Email: {$email} Phone: {$phone} Message: {$message}";

$mail->send();

header("Location: sent.html");