<?php
    include("../config.php"); // Ensure this path is correct
    session_start();
    $_SESSION['message'] = '';
    
    // Check if the connection is established
    if (!isset($conn) || $conn->connect_error) {
        die("MySQLi connection not initialized.");
    } else {
       // echo "Connection verified in user-register.php."; // Debugging message
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        print_r($fileName);
        if($_POST["pwd"]==$_POST["cpwd"]){
            $username=$_POST["name"];
            $email=$_POST["mail"];
            $mobile=$_POST["mobile"];
            $address=$_POST["addr"];
            $pwd=md5($_POST["pwd"]);
            $fileName=$_FILES["profile"]["name"];
            $profile='profile/'.$fileName;
        }
    }
?>

<?php
    include("../header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../assets/css/user-register.css">
    <script defer src="../assets/js/user-register.js"></script>
</head>
<div class="container">
    <div class="container-form">
        <form action="user-register.php" method="post" id="form">
            <h1>Registration Form</h1>
            <div class="error"><?php $_SESSION['message'] ?></div>
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
</div>
<?php include("../footer.php") ?>
    

