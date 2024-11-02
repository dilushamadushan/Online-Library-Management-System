<?php 
//session_start(); 
include "config.php";
?>

<?php
//    $UserPassword = $_SESSION['id'];
//    
//    if(!mysqli_select_db($conn, "library_management_system")) {
//
//    die("Database selection error: " . mysqli_connect_error($conn));
//}
//    $adminSql =mysqli_query($conn, "SELECT admin_name,admin_image FROM admin_table
//               WHERE admin_name = '$userName'");
//
//    $userSql = mysqli_query($conn,"SELECT User_Nmae,User_Password,User_profile FROM user_table
//                WHERE User_Nmae = '$userName'");
//if(mysqli_num_rows($adminSql) > 0) {
//$rowAdmn = mysqli_fetch_assoc($adminSql);
//
//    $_SESSION['logged_in'] = true;
//    $_SESSION['user_type'] = 'admin';
//    $_SESSION['username'] = $rowAdmn['admin_name'];
//    $_SESSION['user_image'] = $rowAdmn['admin_image']; 
//    //echo "admin login success";
//} else if(mysqli_num_rows($userSql) > 0) {
//    $rowUser = mysqli_fetch_assoc($userSql);
//    $_SESSION['logged_in'] = true;
//    $_SESSION['user_type'] = 'user';
//    $_SESSION['user_Name'] = $rowUser['User_Nmae'];
//    $_SESSION['user_Img'] = $rowUser['User_profile']; 
//   // echo "user login success";
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="assets/media/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- LineIcons CDN -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <!-- Header css link -->
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- Index css link -->
     <link rel="stylesheet" href="assets/css/index.css">
    <!-- Footer css link -->
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Public Library</title>
</head>
<body>
<header>
    <div class="logo_img"><img src="assets/media/flogo.png" class="logo" alt="Library Logo" onclick="location.href='index.php';"></div>
    <ul class="nav">
        <li class="nav-item">
            <a href="index.php" class="nav-link text-white position-relative">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white position-relative">Collection</a>
            <ul class="dropdown-menu border-0">
                <li><a class="dropdown-item" href="book.php">Book</a></li>
                <li><a class="dropdown-item" href="#">E-Resourses</a></li>
                <li><a class="dropdown-item" href="#">Pass Paper</a></li>
                <li><a class="dropdown-item" href="#">Magazing & Artical</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="author.php" class="nav-link text-white position-relative">Authors</a>
        </li>
        <li class="nav-item">
            <a href="event_and_news.php" class="nav-link text-white position-relative">Event & News</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white position-relative">About</a>
            <ul class="dropdown-menu border-0">
                <li><a class="dropdown-item" href="about-us.php">About Us</a></li>
                <li><a class="dropdown-item" href="about-us.php">Contact Us</a></li>
            </ul>
        </li>
    </ul>
    
    <div class="btn-main-log" <?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) ? 'style="display:none;"' : ''; ?>>
        <button class="btn btn-warning  login-btn" type="button">
        <a  href="user-login.php">Login</a>
        </button>
    </div>
    <div class="dropdown btn-user-log"<?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) ? '' : 'style="display:none;"'; ?>>
        <div class="user-btn dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo $_SESSION['user_Img'] ?? 'assets/media/default-avatar.png'; ?>" alt="" class="userimg-btn">
        </div>
        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
            <li><a class="dropdown-item-img" href="user-account.php"><img src="<?php echo $_SESSION['user_Img'] ?? 'assets/media/default-avatar.png'; ?>"class="userimg-btn"><span><?php echo htmlspecialchars(strtoupper($_SESSION['user_Name'] ?? 'Guest')); ?></span></a></li>
            <div class="dropLine"></div>
            <li><a class="dropdown-item" href="user-account.php"><i class="fa-solid fa-user-pen"></i><span>Edit Profile</span></a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span></a></li>
        </ul>
    </div>
</header>