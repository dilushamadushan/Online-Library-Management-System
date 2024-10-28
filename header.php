<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                <li><a class="dropdown-item" href="#">Book</a></li>
                <li><a class="dropdown-item" href="#">E-Resourses</a></li>
                <li><a class="dropdown-item" href="#">Pass Paper</a></li>
                <li><a class="dropdown-item" href="#">Magazing & Artical</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white position-relative">Authors</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white position-relative">Event & News</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white position-relative">About</a>
            <ul class="dropdown-menu border-0">
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
            </ul>
        </li>
    </ul>
    <div class="dropdown btn-main-log">
        <button class="btn btn-warning dropdown-toggle login-btn" type="button" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Login
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
            <li><a class="dropdown-item" href="user-login.php"><i class="fa-solid fa-user"></i><span>User Login</span></a></li>
            <li><a class="dropdown-item" href="admin-login.php"><i class="fa-solid fa-user-tie"></i><span>Admin Login</span></a></li>
        </ul>
    </div>

    <div class="dropdown btn-user-log">
        <div class="user-btn dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/media/admin-page/avatar.png" alt="" class="userimg-btn">
        </div>
        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
            <li><a class="dropdown-item " href="#"><img src="assets/media/admin-page/avatar.png" alt="" class="userimg-btn"><span>User Name</span></a></li>
            <div class="dropLine"></div>
            <li><a class="dropdown-item" href="user-account.php"><i class="fa-solid fa-user-pen"></i><span>Edit Profile</span></a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span></a></li>
        </ul>
    </div>

</header>
