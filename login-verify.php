<?php 
session_start(); 
include "config.php";

if (isset($_SESSION['user_name'])) {
    echo "Already logged in as: " . $_SESSION['user_name'];
    exit();  // Temporary exit to prevent redirect loop
}


if (isset($_POST['user-id']) && isset($_POST['u-pwd'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['user-id']);
    $pass = validate($_POST['u-pwd']);

    if (empty($uname)) {
        header("Location: userlogin.php?error=User ID is required");
        exit();
    } else if (empty($pass)) {
        header("Location: userlogin.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user_table WHERE user_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_id'] === $uname && $row['User_Password'] === md5($pass)) {
                $_SESSION['user_name'] = $row['User_Nmae'];
                $_SESSION['id'] = $row['user_id'];
            
                if ($row['User_role'] === 'user') {
                    header("Location: user-account.php");
                } else if ($row['User_role'] === 'admin') {
                    header("Location: adminpannel.php");
                }
                exit();
            }
            else {
                header("Location: userlogin.php?error=Incorrect User ID or password");
                exit();
            }
        } else {
            header("Location: userlogin.php?error=Incorrect User ID or password");
            exit();
        }
    }
} else {
    header("Location: userlogin.php");
    exit();
}
?>