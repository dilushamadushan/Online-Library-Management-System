<?php
session_start();
include("config.php");

if (isset($_POST['btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['addr']);
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $verification_status = "0";
    $role = "user";
    $num = 1;

    if (!empty($username) && !empty($email) && !empty($address) && !empty($pwd) && !empty($cpwd)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $SQL = mysqli_query($conn, "SELECT User_Emaiil FROM user_table WHERE User_Emaiil='{$email}'");
            if (mysqli_num_rows($SQL) > 0) {
                echo "{$email} - Already exists";
            } else {
                if ($pwd === $cpwd) {
                    $hashed_pwd = password_hash($pwd, PASSWORD_BCRYPT);
                    if (isset($_FILES['profile'])) {
                        $image = $_FILES['profile']['name'];
                        $image_tmp_name = $_FILES['profile']['tmp_name'];
                        $img_extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                        $allowed_extensions = ['png', 'jpeg', 'jpg'];

                        if (in_array($img_extension, $allowed_extensions)) {
                            $time = time();
                            $new_image_name = $time . '_' . $image;
                            $image_folder = 'profile/' . $new_image_name;
                            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                                $otp = mt_rand(1111, 9999);
                                $id = "U";
                                $User_id = $id . "00" . $num;
                                global $num;
                                $num++;
                                $sql2 = mysqli_query($conn, "INSERT INTO user_table (user_id, User_Nmae, User_Emaiil, User_Mobile, User_Address, User_Password, User_Profile, varification_status, user_otp) 
                                VALUES ('$User_id','$username', '$email', '$mobile', '$address', '$hashed_pwd', '$new_image_name', '$verification_status', '$otp')");

                                if ($sql2) {
                                    $_SESSION['otp'] = $otp;
                                    $_SESSION['mail'] = $email;
                                    require "Mail/phpmailer/PHPMailerAutoload.php";
                                    $mail = new PHPMailer;

                                    $mail->isSMTP();
                                    $mail->Host = 'smtp.gmail.com';
                                    $mail->Port = 587;
                                    $mail->SMTPAuth = true;
                                    $mail->SMTPSecure = 'tls';

                                    $mail->Username = 'hanoufaatif@gmail.com';
                                    $mail->Password = 'rvux ccrc ggge uifx';

                                    $mail->setFrom('hanoufaatif@gmail.com', 'Public Library');
                                    $mail->addAddress($email);

                                    $verification_link = "http://yourdomain.com/verify.php?email=$email&otp=$otp";
                                    $mail->Subject = 'OTP verification';
                                    $mail->Body = 'Click the following link to verify your email: ' . $verification_link;

                                    if(!$mail->send()){
                                        ?>
                                            <script>
                                                alert("<?php echo "Register Failed, Invalid Email "?>");
                                            </script>
                                        <?php
                                    }else{
                                        ?>
                                        <script>
                                            alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                            window.location.replace('verify.html');
                                        </script>
                                        <?php
                                    }
                                } else {
                                    echo "Something went wrong in the registration process.";
                                }
                            } else {
                                echo "Failed to upload the profile image.";
                            }
                        } else {
                            echo "Invalid image format. Only JPG, PNG, and JPEG are allowed.";
                        }
                    } else {
                        echo "Please select a profile image.";
                    }
                } else {
                    echo "Passwords do not match.";
                }
            }
        } else {
            echo "$email is not a valid email address.";
        }
    } else {
        echo "All input fields are required.";
    }
}
?>
<?php
    include("header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="assets/css/user-register.css">
    <script defer src="assets/js/user-register.js"></script>
</head>
<div class="container">
    <div class="container-form">
        <form action="user-register.php" method="post" id="form" enctype="multipart/form-data">
            <h1>Registration Form</h1>

            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="error">'.$message.'</div>';
                    }
                }
            ?>
            <div class="error"></div>

            <input type="text" name="name" id="name" placeholder="Enter Your User Name:" >
            <input type="text" name="mail" id="mail" placeholder="Enter Your Email" >
            <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No:" >
            <input type="text" name="addr" id="addr" placeholder="Enter Your Address" >
            <input type="file" name="profile" id="profile" accept="image/*">
            <div class="pwd-icon">
                <input type="password" name="pwd" id="pwd" placeholder="Enter Your User Password">
                <img src="assets/media/admin-page/eye-close.png" alt="eye-open" id="icon-pwd">
            </div>
            <div class="pwd-icon">
                <input type="password" name="cpwd" id="cpwd" placeholder="Re Enter the Password:" >
                <img src="assets/media/admin-page/eye-close.png" alt="eye-open" id="icon-cpwd">
            </div>
            <input type="submit" value="Register Now" id="btn" name="btn">
            <p>Already have an account <a href="user-login.php">Log-In</a></p>
        </form>
    </div>
</div>
<?php include("footer.php") ?>
<?php
// if (isset($_GET['email']) && isset($_GET['otp'])) {
//         $email = mysqli_real_escape_string($conn, $_GET['email']);
//         $otp = mysqli_real_escape_string($conn, $_GET['otp']);

//         $SQL = mysqli_query($conn, "SELECT * FROM user_table WHERE User_Emaiil='$email' AND user_otp='$otp'");
//         if (mysqli_num_rows($SQL) > 0) {
//             $update = mysqli_query($conn, "UPDATE user_table SET varification_status='1' WHERE User_Emaiil='$email'");
//             if ($update) {
//                 echo "Email verification successful!";
//             } else {
//                 echo "Failed to update verification status.";
//             }
//         } else {
//             echo "Invalid verification link or OTP.";
//         }
//     } else {
//         echo "Invalid request.";
//     }
//     ?>

