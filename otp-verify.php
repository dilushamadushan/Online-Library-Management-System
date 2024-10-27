<?php 
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    $email = $_SESSION['mail'] ;
    $stored_otp = $_SESSION['otp']; 
    

    if ($stored_otp == $otp) {
        $query = "UPDATE user_table SET varification_status = 1 WHERE User_Emaiil = '$email'";
        $update_status = mysqli_query($conn, $query);

        if ($update_status) {
            echo "success";
        } else {
            echo "Failed to update verification status.";
        }
        
    } else {
        
        echo "Invalid OTP code.";
    }
} else {
    echo "Invalid request.";
}
?>