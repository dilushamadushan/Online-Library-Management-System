<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
                <h1>User Login</h1>
                <div class="error"></div>
                <input type="text" name="user" id="user" placeholder="User Name">
                <div class="pwd-icon">
                    <input type="password" name="pwd" id="pwd" placeholder="Password">
                    <img src="../assets/media/admin-page/eye-close.png" alt="eye-close" id="icon-pwd">
                </div>
                <input type="submit" name="btn" id="btn" value="Login">

                <p>Don't You Have an account <a href="../users/user-register.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>