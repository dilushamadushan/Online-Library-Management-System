<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <!-- Index css link -->
     <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>
<body>
<header>
    <div class="logo_img"><img src="../assets/media/flogo.png" class="logo" alt="Library Logo"></div>
    <ul class="nav">
        <li class="nav-item">
            <a href="#" class="nav-link text-white position-relative">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white position-relative">Collection</a>
            <ul class="dropdown-menu border-0">
                <li><a class="dropdown-item" href="#">Part 1</a></li>
                <li><a class="dropdown-item" href="#">Part 2</a></li>
                <li><a class="dropdown-item" href="#">Part 3</a></li>
                <li><a class="dropdown-item" href="#">Part 4</a></li>
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
    <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle login-btn" type="button" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Login
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
            <li><a class="dropdown-item" href="../users/user-login.php">User Login</a></li>
            <li><a class="dropdown-item" href="../admin/admin-login.php">Admin Login</a></li>
        </ul>
    </div>
</header>
