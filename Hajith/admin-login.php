<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-IN</title>
</head>
<body>
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <img src="admin.png" alt="admin">
        </div>
        <div class="admin-login-pannal">
            <form action="admin-login.php" method="post" id="form">
                <h1>Admin Login</h1>
                <input type="text" name="user" id="user" placeholder="User Name">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <input type="submit" name="btn" id="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>