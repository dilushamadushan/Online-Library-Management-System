<?php
include("config.php");
session_start();

$user = $_POST['user-name']; 
$pwd = ($_POST['u-pwd']); 
$_SESSION['message']="";

if (!empty($user) && !empty($pwd)) {
    $sql = mysqli_query($conn, "SELECT * FROM user_table WHERE User_Nmae='{$user}' AND User_Password='{$pwd}'");
    
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        if ($row) {
            $_SESSION['user_id'] = $row['User_Id']; 
            $_SESSION['user-name'] = $row['User_Nmae']; 
            $_SESSION['user_otp'] = $row['User_otp']; 
            $_SESSION['message']="success";
        }
    } else {
        $_SESSION['message']="Password or Username is incorrect"; 
    }
} else {
    $_SESSION['message']="Required fields are missing!";
}
?>
