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
$success = null; // Set to null initially

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Validate inputs
    if (empty($name)) {
        $nameErr = "Name is required";
    }

    if (empty($email)) {
        $emailErr = "Email is required";
    }

    if (empty($subject)) {
        $subjectErr = "Subject is required";
    }

    if (empty($message)) {
        $messageErr = "Message is required";
    }

    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)) {
        // Set up email
        $phpmailer->setFrom($email, $name);
        $phpmailer->addAddress('receiver@gmail.com', 'Me');
        $phpmailer->Subject = $subject;
        $phpmailer->isHTML(false);
        $phpmailer->Body = $message;

        // Send email
        if ($phpmailer->send()) {
            $success = true;
        } else {
            $success = false;
        }
    }
}
