<?php
    include("config.php");
    if (isset($_POST['btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $address = mysqli_real_escape_string($conn, $_POST["addr"]);
    $pwd = mysqli_real_escape_string($conn, md5($_POST['pwd']));
    $cpwd = mysqli_real_escape_string($conn, md5($_POST['cpwd']));
    $image = $_FILES['profile']['name'];
    $image_size = $_FILES['profile']['size'];
    $image_tmp_name = $_FILES['profile']['tmp_name'];
    $image_folder = 'profile/'.$image;

    $select = mysqli_query($conn, "SELECT * FROM `user_table` WHERE User_Nmae = '$username'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pwd != $cpwd){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_table`(User_Nmae, User_Emaiil	, User_Mobile, User_Address,User_Password,User_profile) VALUES('$username ', '$email', '$mobile', '$address','$pwd','$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:user-register.php');
         }else{
            $message[] = 'registeration failed!';
         }
        
      }
    }
   }

$conn->close();        
            
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
    

