

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../assets/css/user-register.css">
    <script defer src="../assets/js/user-register.js"></script>
</head>
<body>
    <div class="container-form">
        <form action="#" id="form">
            <h1>Registration Form</h1>
            <div class="error"></div>
            <input type="text" name="name" id="name" placeholder="Enter Your User Name:" >
            <input type="text" name="mail" id="mail" placeholder="Enter Your Email" >
            <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No:" >
            <input type="text" name="addr" id="addr" placeholder="Enter Your Address" >
            <input type="file" name="profile" id="profile" accept="image/*">
            <div class="pwd-icon">
                <input type="password" name="pwd" id="pwd" placeholder="Enter Your User Password">
                <img src="../assets/media/admin-page/eye-close.png" alt="eye-open" id="icon-pwd">
            </div>
            <div class="pwd-icon">
                <input type="password" name="cpwd" id="cpwd" placeholder="Re Enter the Password:" >
                <img src="../assets/media/admin-page/eye-close.png" alt="eye-open" id="icon-cpwd">
            </div>
            <input type="submit" value="Register Now" id="btn">
            <p>Already have an account <a href="../users/user-login.php">Log-In</a></p>
        </form>
    </div>
</body>
</html>

