<?php include "header.php";?>
<head>
    <link rel="stylesheet" href="assets/css/user-account.css">
</head>
<body style="background-image: url(assets/media/user-account/user-background.jpg);background-size: cover;">
    <div id="update-password" class="password-section text-center">
        <h1>Change Password</h1>
        <form action="change-password-verify.php" method="POST" class="password-form mt-4">
            <h3>Current Password:</h3>
            <input type="password" class="form-control mb-3" name="current_password" required>
            <h3>New Password:</h3>
            <input type="password" class="form-control mb-3" name="new_password" required>
            <h3>Re-type Password:</h3>
            <input type="password" class="form-control mb-4" name="confirm_password">
            <input type="submit" name="pass-btn" value="Change Password" class="btn submit-btn" required>
            <input type="button" class="btn back-btn" value="Back to Profile" onclick="location.href='user-account.php';">
        </form>
        <?php if(isset($_GET['error'])){ ?> 
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if(isset($_GET['success'])){ ?> 
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
    </div>
</body>
<?php include("footer.php"); ?>