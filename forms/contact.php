<?php

$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $messageErrr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Set the recipient email address.
    $recipient = "seadimo.bugqwangu@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content = "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }

 }else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

