<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '5459b59556611b';
$phpmailer->Password = '318ea63838c1bd';

$nameErr = "";
$emailErr = "";
$messageErr = "";
$subjectErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    if (empty($_POST["name"])) {
        echo $nameErr = "Name is required";
    }

    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
    }

    if (empty($_POST["subject"])) {
        echo $subjectErr = "Subject is required";
    }

    if (empty($_POST["message"])) {
        echo $messageErr = "Message is required";
    }

    $phpmailer->setFrom($email, $name);
    $phpmailer->addAddress('reciever@gmail.com', 'Me');
    $phpmailer->Subject = $subject;
    $phpmailer->isHTML(false);
    $phpmailer->Body = $message;

    if (!$phpmailer->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $phpmailer->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
