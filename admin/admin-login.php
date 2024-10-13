<?php
    include("../header.php");
?>
<head>
    <title>Admin Log-IN</title>
    <link rel="stylesheet" href="../assets/css/admin-login.css">
    <script defer src="../assets/js/admin-login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <script defer src="../assets/js/login.js"></script>
</head>
<div class="container">
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="admin-login-pannal">
            <form action="admin-login.php" method="post" id="form">
                <h1>Admin Login</h1>
                <div class="error"></div>
                <input type="text" name="user" id="user" placeholder="User Name">
                <div class="pwd-icon">
                    <input type="password" name="pwd" id="pwd" placeholder="Password">
                    <img src="../assets/media/admin-page/eye-close.png" alt="eye-close" id="icon-pwd">
                </div>
                <input type="submit" name="btn" id="btn" value="Login">
            </form>
        </div>
    </div>
</div>

