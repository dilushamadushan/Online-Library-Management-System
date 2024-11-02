<?php 
//session_start();
include "config.php";

//if(isset($_SESSION['user_id']) && isset($_SESSION['User_Nmae'])){
if(isset($_POST['pass-btn'])){
if(isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $current_password = validate($_POST['current_password']);
    $new_password =validate($_POST['new_password']);
    $confirm_password =validate($_POST['confirm_password']);

//    $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
//    if(!preg_match($password_regex, $new_password)){
//        header("Location: password-change.php?error=Password must be 8+ chars with uppercase, lowercase, number, and symbol.");
//        exit();
//    } 
//    if(!preg_match($password_regex, $confirm_password)){
//        header("Location: password-change.php?error=Password must be 8+ chars with uppercase, lowercase, number, and symbol.");
//        exit();    
//    }
//
    if(empty($current_password)){
        header("Location: password-change.php?error=Please enter your current password.");
        exit();
    }else if(empty($new_password)){
        header("Location: password-change.php?error=Please enter a new password.");
        exit();
    }else if($confirm_password !== $new_password){
        header("Location: password-change.php?error=New password and confirmation do not match.");
        exit();
    }else{
    
     $current_password = md5($current_password);
     $new_password = md5($new_password);
     $userID = 'U001';//$_SESSION['user_id'];

     $result_cass=mysqli_query($conn,"SELECT User_Password
                FROM user_table WHERE user_id = '$userID' AND
                User_Password  = '$current_password'");
        if(mysqli_num_rows($result_cass) === 1){
    
            mysqli_query($conn,"UPDATE User_table 
                                SET User_Password = '$new_password'
                                WHERE user_id = '$userID'");
             header("Location: password-change.php?success=Your Password Has Been Change Successfully.");
             exit();
        }else{
            header("Location: password-change.php?error=Incorrect Password");
            exit();
        }
       
    }
}else{
    header("Location: password-change.php?error=Fill the all field.");
            exit();
}
}

//}else{
//    header("location : login.php");
//    exit();
//}


?>