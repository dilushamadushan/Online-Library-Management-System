<?php
session_start();
include("config.php");
function generateUserID($number) {
    return 'U' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

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
                                    $query = "SELECT MAX(user_id) AS last_id FROM user_table";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    $lastUserID = (int)str_replace('U', '', $row['last_id']);
                                    $newUserID = generateUserID($lastUserID + 1);
                                    $sql2 = mysqli_query($conn, "INSERT INTO user_table (user_id, User_Nmae, User_Emaiil, User_Mobile, User_Address, User_Password, User_Profile, varification_status, user_otp) 
                                    VALUES ('$newUserID','$username', '$email', '$mobile', '$address', '$hashed_pwd', '$new_image_name', '$verification_status', '$otp')");

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

                                   
                                    $mail->Subject = 'OTP verification';
                                    $mail->Body = 'This is your four digit OTP ' . $otp;

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
                                            window.location.replace('verify.php');
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


