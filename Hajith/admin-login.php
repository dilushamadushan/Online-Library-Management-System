<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-IN</title>
    <link rel="stylesheet" href="../assets/css/admin-login.css">
</head>
<body>
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <img src="../assets/media/home-main/admin.png" alt="admin">
        </div>
        <div class="admin-login-pannal">
            <form action="admin-login.php" method="post" id="form">
                <h1>Admin Login</h1>
                <div class="error"></div>
                <input type="text" name="user" id="user" placeholder="User Name">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <input type="submit" name="btn" id="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>