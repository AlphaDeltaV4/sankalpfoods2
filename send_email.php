<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];

    // Set up the email recipient and subject
    $to = 'herambk812@gmail.com'; // Replace with your email address
    $subject = 'New Email from Contact Form';

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Type: $type\n";
    $email_content .= "Message: $message\n";

    // Set up the email headers
    $headers = "From: $name <$email>";

    // Send the email
    // ini_set();
    // ini_set('SMTP', 'localhost');
    // ini_set('smtp_port', 25);
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
