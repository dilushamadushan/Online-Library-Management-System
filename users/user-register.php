<?php
    include("../config.php");
    session_start();
    $_SESSION['message'] = '';
    
    if (isset($_POST['name']) && isset($_POST['mail'])
    && isset($_POST['mobile']) && isset($_POST['addr'])&& isset($_POST["pwd"])&& isset($_POST["cpwd"])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $username=validate($_POST["name"]);
    $email=validate($_POST["mail"]);
    $mobile=validate($_POST["mobile"]);
    $address=validate($_POST["addr"]);
    $pwd=validate($_POST["pwd"]);
    $cpwd=validate($_POST["cpwd"]);

    $error = '';  
    $success = '';  

    if(empty($username)){
        $error = "User Name is required.";
    }
    else if(empty($email)){
        $error = "Email is required.";
           
    }
    else if(empty($mobile)){
        $error = "Mobile number is required.";     
    }
    else if(empty($address)){
        $error = "Address is required.";
    }
    else if(empty($pwd)){
        $error = "Password is required.";
    }
    else if ($pwd !== $cpwd) { 
        $error = "Passwords do not match.";
    }
    else{
        $pwd=md5($pwd);
        $sql = "SELECT * FROM user_table WHERE User_Nmae='$username' ";
		$result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            $error = "The username is already taken. Try another one.";
		}else {
           $sql2 = "INSERT INTO user_table(User_Nmae, User_Emaiil,User_Mobile,User_Address,User_Password	) VALUES('$username', '$email', $mobile,'$address','$pwd')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
            $success = "Your account has been created successfully!";
           }else {
            $error = "An unknown error occurred. Please try again.";
           }
		}
    }
}
$conn->close();        
            
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
            <?php if (!empty($error)): ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
            <?php elseif (!empty($success)): ?>
                <div class="success" style="background-color: green; color:white; font-size: 17px; margin: 8px 0; height:45px;">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
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
    

