<?php
    include("config.php");
    session_start();
    if (isset($_POST['btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $pwd = mysqli_real_escape_string($conn, md5($_POST['pwd']));

    $select = mysqli_query($conn, "SELECT User_Id, User_Nmae FROM `user_table` WHERE User_Name = '$username' AND User_Password = '$pwd'") or die('Query failed');

   if(mysqli_num_rows($select) > 0){
        $row=mysqli_fetch_assoc($select);
        $_SESSION['user_id']=$row['User_Id'];
        header("Location:../user-account.php");
        exit();
      
   }else{
    $message[] = 'incorrect User Name or password!';

   }
}      
            
?>

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
            <form action="admin-login.php" method="post" id="form">
                <h1>User Login</h1>
                <div class="error"></div>
                <input type="text" name="user" id="user" placeholder="User Name">
                <div class="pwd-icon">
                    <input type="password" name="pwd" id="pwd" placeholder="Password">
                    <img src="assets/media/admin-page/eye-close.png" alt="eye-close" id="icon-pwd">
                </div>
                <input type="submit" name="btn" id="btn" value="Login">

                <p>Don't You Have an account <a href="user-register.php">Register</a></p>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>
