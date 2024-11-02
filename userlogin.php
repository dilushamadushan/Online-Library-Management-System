<?php 
session_start(); 
include "db_conn.php";

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
        header("Location: index.php?error=User ID is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user_table WHERE user_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_id'] === $uname && password_verify($pass, $row['User_Password'])) {
                if ($row['User_role'] === 'user') {
                    $_SESSION['user_name'] = $row['User_Nmae'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['user_id'];
                    header("Location: user-account.php");
                    exit();
                } else if ($row['User_role'] === 'admin') {
                    header("Location: adminpannel.php");
                    exit();
                }
            } else {
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


<?php include("header.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="admin-log-in-interface">
        <div class="admin-image">
            <i class="fa-solid fa-user" id="user-icon"></i>
        </div>
        <div class="admin-login-pannal">
            <form action="userlogin.php" method="post" id="form" enctype="multipart/form-data">
                <h1>User Login</h1>
                <?php if (isset($_GET['error'])) { ?>
     		    <div class="error"><?php echo $_GET['error']; ?></div>
     	        <?php } ?>
                <input type="text" name="user-id" id="user" placeholder="User Name">
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