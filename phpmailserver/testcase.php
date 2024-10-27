<?php
// Include the API file where the function is defined
require 'send.php';

// Define the recipient, subject, and message
$to = 'ahammedlebbehajith@gmail.com';      // Replace with the recipient's email
$subject = 'HIIIIIIIIIIIIIIIII'; // The email subject
$message = 'IT IS MEEEEEEEEE';  // The email body

// Call the sendEmail function
$result = sendEmail($to, $subject, $message);

// Output the result
echo $result;
?>
