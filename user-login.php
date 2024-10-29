

<?php
    include("header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="assets/js/login.js"></script>
</head>

<div class="container">
    <div class="admin-log-in-interface">
        <div class="admin-image">
        <i class="fa-solid fa-user" id="user-icon"></i>
        </div>
        <div class="admin-login-pannal">
            <form action="login-verify.php" method="post" id="form">
                <h1>User Login</h1>
                <div class="error">
                    <?php
                        session_start();
                        echo $_SESSION['message'];
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

