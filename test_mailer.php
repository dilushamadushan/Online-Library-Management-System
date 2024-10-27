<?php
$to = 'ahammedlebbehajith@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: your-email@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed!';
}
?>