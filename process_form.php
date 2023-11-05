<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email parameters
    $to = 'kael.m0211@gmail.com'; // my email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        header('Location: thank_you.html');
        exit;
    } else {
        // Email failed to send
        echo 'An error occurred while sending the email.';
    }
}
?>
