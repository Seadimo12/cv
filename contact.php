<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/phpmailer/Exception.php';
// require 'phpmailer/phpmailer/PHPMailer.php';
// require 'phpmailer/phpmailer/SMTP.php';

// $phpmailer = new PHPMailer();
// $phpmailer->isSMTP();
// $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
// $phpmailer->SMTPAuth = true;
// $phpmailer->Port = 2525;
// $phpmailer->Username = '8400c07a77a8f3';
// $phpmailer->Password = '51a8373b0b902f';

$nameErr = "";
$emailErr = "";
$messageErr = "";
$subjectErr = "";

$name = "";
$email = "";
$subject = "";
$message = "";

// $mail->setFrom($email, $name);
// $mail->addAddress('receiver@gmail.com', 'Me');
// $mail->Subject = $subject;
// // Set HTML 
// $mail->isHTML(TRUE);
// $mail->Body = '<html>Hi there, we are happy to <br>confirm your booking.</br> Please check the document in the attachment.</html>';
// $mail->AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';


// send the message
// if (!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }


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
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
