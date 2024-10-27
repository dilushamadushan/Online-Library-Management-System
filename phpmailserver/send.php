<?php
//Import PHPMailer classes into the global namespace
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Function to send email
function sendEmail($to, $subject, $message) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                // Disable verbose debug output
        $mail->isSMTP();                                   // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                          // Enable SMTP authentication
        $mail->Username   = 'hanoufaatif@gmail.com';          // SMTP username
        $mail->Password   = 'fbvz ueat rbrr qqfw';         // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   // Enable implicit TLS encryption
        $mail->Port       = 465;                           // TCP port to connect to

        //Recipients
        $mail->setFrom('hanoufaatif@gmail.com', 'Mailer');     // Sender email and name
        $mail->addAddress($to);                            // Add recipient

        // Content
        $mail->isHTML(true);                               // Set email format to HTML
        $mail->Subject = $subject;                         // Set the subject
        $mail->Body    = $message;                         // Set the HTML message body
        $mail->AltBody = strip_tags($message);             // Plain text message body

        $mail->send();                                     // Send the email
        return "Message has been sent";
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
