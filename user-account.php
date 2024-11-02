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
                <div class="sidebar-logo">Profile</div>
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
                <li class="sidebar-item" onclick="location.href='password-change.php';">
                    <a class="sidebar-link" href="#">
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
            <div id="profile" class="main-section active">
                <div class="profile-details">
                    <div class="main-topic">
                            <h1>My Profile</h1>
                    </div>
                    <div class="user-info-main">
                        <div class="user-img">
                            <img src="assets/media/user-account/tempUser.jpg" alt="User Image">
                        </div>
                        <div class="user-info">
                                <div class="user-info-details">
                                    <span>Name:</span>
                                    <p class="font-monospace">Dilusha madushan</p>
                                </div>
                                <div class="user-info-details">
                                    <span>Email:</span>
                                    <p class="font-monospace">dilushamadushan@gmail.com</p>
                                </div>
                                <div class="user-info-details">
                                    <span>Contact Number:</span>
                                    <p class="font-monospace">202-2223332</p>
                                </div>
                                <div class="user-info-details">
                                    <span>Address:</span>
                                    <p class="font-monospace">No 2, Abc, Kandy</p>
                                </div>
                                <button id="user-update"><i class="fa-solid fa-pen"></i>Edit Profile</button>
                        </div>
                    </div>
                    <div class="update-form ">
                        <form action="" method="POST">
                            <label>Name</label><br>
                            <input type="text" name="up-name"><br>
                            <label>Email</label><br>
                            <input type="email" name="up-email" ><br>
                            <label>Contact Number</label><br>
                            <input type="tel" name="up-email" ><br>
                            <label>Address</label><br>
                            <input type="text" name="up-address" ><br>
                            <button id="update-user-btn" class="user-prof-btn" value="Update">Update</button>
                        </form>
                        <button id="profBack-user" class="user-prof-btn" value="Back">Back</button>
                    </div>
                </div>
            </div>
            <div id="books" class="main-section ">
                <div class="main-topic">
                    <h1>Books</h1>
                </div>
                <div id="book-btn">
                    <button id="list-book" class="book-main-btn"><i class="fa-solid fa-list"></i> Book List</button>
                    <button id="return-book" class="book-main-btn"><i class="fa-solid fa-rotate-left"></i> Book Return</button>
                    <button id="issued-book" class="book-main-btn"><i class="fa-regular fa-bookmark"></i> Book Issued</button>
                </div>
                <div id="book-res" class="book-res">
                    <div id="list-book-sec" class="section-table">
                        <table class="book-table">
                            <tr>
                                <th>Book Number</th>
                                <th>Book Name</th>
                                <th>ISBN Number</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>100</td>
                                <td>Harry Potter</td>
                                <td>85-223</td>
                                <td>J. K. Rowling</td>
                                <td>Return</td>
                            </tr>
                        </table>
                    </div>
                    <div id="return-book-sec">
                        <div id="list-book-sec" class="section-table">
                            <table class="book-table">
                                <tr>
                                    <th>book id</th>
                                    <th>Book Name</th>
                                    <th>Get Date</th>
                                    <th>Returned Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>501</td>
                                    <td>Becoming</td>
                                    <td>12-12-1291</td>
                                    <td>15-08-2023</td>
                                    <td>Return</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="issued-book-sec">
                        <div id="list-book-sec" class="section-table">
                            <table class="book-table">
                                <tr>
                                    <th>Book ID</th>
                                    <th>Book Name</th>
                                    <th>Issued Date</th>
                                    <th>Returned Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1001</td>
                                    <td>Harry Potter</td>
                                    <td>12-10-2023</td>
                                    <td>01-11-2023</td>
                                    <td>Return</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="E-Resourses" class="main-section">
                    <div class="main-topic">
                        <h1>E-Resourses</h1>
                    </div>
                    <div id="book-btn">
                        <button id="e-list-book" class="book-main-btn"><i class="fa-solid fa-list"></i> Book List</button>
                        <button id="e-return-book" class="book-main-btn"><i class="fa-solid fa-rotate-left"></i> Book Return</button>
                        <button id="e-issued-book" class="book-main-btn"><i class="fa-regular fa-bookmark"></i> Book Issued</button>
                    </div>
                    <div id="e-book-res" class="e-book-res">
                        <div id="e-list-book-sec" class="e-section-table">
                            <table class="e-book-table">
                                <tr>
                                    <th>Book Number</th>
                                    <th>Book Name</th>
                                    <th>ISBN Number</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td>Harry Potter</td>
                                    <td>85-223</td>
                                    <td>J. K. Rowling</td>
                                    <td>Return</td>
                                </tr>
                            </table>
                        </div>
                        <div id="e-return-book-sec">
                            <div id="e-list-book-sec" class="e-section-table">
                                <table class="e-book-table">
                                    <tr>
                                        <th>book id</th>
                                        <th>Book Name</th>
                                        <th>Get Date</th>
                                        <th>Returned Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>501</td>
                                        <td>Becoming</td>
                                        <td>12-12-1291</td>
                                        <td>15-08-2023</td>
                                        <td>Return</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="e-issued-book-sec">
                            <div id="e-list-book-sec" class="e-section-table">
                                <table class="e-book-table">
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>
                                        <th>Issued Date</th>
                                        <th>Returned Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1001</td>
                                        <td>Harry Potter</td>
                                        <td>12-10-2023</td>
                                        <td>01-11-2023</td>
                                        <td>Return</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

<script src="assets/js/user-account.js"></script>

<?php
    include("footer.php");
?>