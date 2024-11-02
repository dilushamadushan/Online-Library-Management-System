<?php 
session_start();
include "config.php";

if(isset($_SESSION['User_loggedin'])){
    $userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;

    if (!$userId) {
        $msg = "User not logged in.";
        echo "<script>alert('$msg'); window.location.href = 'user-account.php';</script>";
        exit();
    }

    if (isset($_POST['up-name']) && isset($_POST['up-email']) && isset($_POST['up-cono']) && isset($_POST['up-address'])) {
        
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $userName = validate($_POST['up-name']);
        $userEmail = validate($_POST['up-email']);
        $userCoNo = validate($_POST['up-cono']);
        $userAddress = validate($_POST['up-address']);

        if (empty($userName) || empty($userEmail) || empty($userCoNo) || empty($userAddress)) {
            $msg = "Please fill all fields.";
            echo "<script>alert('$msg'); window.location.href = 'user-account.php';</script>";
            exit();
        } else {
            $query = "UPDATE user_table SET 
                        User_Nmae = '$userName', 
                        User_Emaiil = '$userEmail',
                        User_Mobile = '$userCoNo', 
                        User_Address = '$userAddress'
                      WHERE user_id = '$userId'";
            $up_result = mysqli_query($conn, $query);

            if ($up_result) {
                $msg = "Profile updated successfully.";
            } else {
                $msg = "Failed to update profile: " . mysqli_error($conn);
            }
            echo "<script>alert('$msg'); window.location.href = 'user-account.php';</script>";
            exit();
        }
    } else {
        $msg = "Required fields not set.";
        echo "<script>alert('$msg'); window.location.href = 'user-account.php';</script>";
        exit();
    }
}
?>
