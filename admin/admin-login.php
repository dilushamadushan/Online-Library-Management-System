<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-IN</title>

    <link rel="stylesheet" href="../assets/css/admin-login.css">
    <script defer src="../assets/js/admin-login.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script defer src="../assets/js/login.js"></script>
</head>
<body>
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <img src="../assets/media/admin-page/admin1.png" alt="admin">
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
</body>
</html>

<?php include("footer.php") ?>