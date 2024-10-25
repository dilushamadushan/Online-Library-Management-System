<?php
    include("header.php");
?>
<head>
    <link rel="stylesheet" href="assets/css/user-account.css">
</head>
<div class="sec">
    <div class="user-section">

        <div class="sidebar" id="sidebar">

            <div class="sidebar-head">
                <button class="toggle-btn" type="button" id="toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="sidebar-logo">User Name</div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" data-target="profile">
                        <i class="fa-regular fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" data-target="books">
                        <i class="fa-solid fa-book"></i>
                        <span>Books</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" data-target="E-Resourses">
                        <i id="sidebar-ai1" class="lni lni-layout"></i>
                        <span>E-Resourses</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" data-target="update-password">
                        <i class="fa-solid fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
            </div>

        </div>

        <div class="main">


        </div>
    </div>
</div>

<script src="assets/js/user-account.js"></script>

<?php
    include("footer.php");
?>