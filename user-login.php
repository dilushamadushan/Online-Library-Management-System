<?php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user-name']; 
    $pwd = $_POST['u-pwd']; 
    $_SESSION['message'] = "";

    if (!empty($user) && !empty($pwd)) {
        $sql = mysqli_query($conn, "SELECT * FROM user_table WHERE User_Nmae='{$user}' AND User_Password='{$pwd}'");
        
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            if ($row) {
                $_SESSION['user_id'] = $row['user_id']; 
                $_SESSION['user-name'] = $row['User_Nmae']; 
                $_SESSION['user_otp'] = $row['user_otp']; 
                $_SESSION['message'] = "success";
                
                if ($row['User_role'] == 'admin') {
                    header("Location: admin-panel.php");
                } else {
                    header("Location: user-account.php");
                }
                exit();
            }
        } else {
            $_SESSION['message'] = "Password or Username is incorrect"; 
        }
    } else {
        $_SESSION['message'] = "Required fields are missing!";
    }

    header("Location: login.php");
    exit();
}
?>

<?php include("header.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="assets/js/login.js"></script>
</head>
<body>
<div class="container">
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <i class="fa-solid fa-user" id="user-icon"></i>
        </div>
        <div class="admin-login-pannal">
            <form action="user-login.php" method="post" id="form" enctype="multipart/form-data">
                <h1>User Login</h1>
                <div class="error">
                    <?php
                    session_start();
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
                <input type="text" name="user-name" id="user" placeholder="User Name">
                <div class="pwd-icon">
                    <input type="password" name="u-pwd" id="pwd" placeholder="Password">
                    <img src="assets/media/admin-page/eye-close.png" alt="eye-close" id="icon-pwd">
                </div>
                <input type="submit" name="submit" id="btn" value="Login">
                <p>Don't You Have an account <a href="user-register.php">Register</a></p>
            </form>
        </div>
    </div>
</div>
</body>