<?php
    require "Mail/phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'hanoufaatif@gmail.com';
    $mail->Password = 'rvux ccrc ggge uifx';

    $mail->setFrom('hanoufaatif@gmail.com', 'Your Name');
    $mail->addAddress("ahammedlebbehajith@gmail.com");

    //$verification_link = "http://yourdomain.com/verify.php?email=$email&otp=$otp";
    $mail->Subject = 'OTP verification';
    $mail->Body = 'Click the following link to verify your email: ';

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Registration successful, please check your email for the verification link.";
    }
?>