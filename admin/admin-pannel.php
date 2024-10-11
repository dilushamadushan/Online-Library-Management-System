



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-pannel.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="../assets/js/admin-pannel.js"></script>
</head>
<body>
    <div class="admin-pannel-container">
        <div class="menues-admin">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">Admin Pannel</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item" id="profile">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-i" class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="users" >
                        <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="book">
                        <a href="#" class="sidebar-link ">
                            <i class="lni lni-book"></i>
                            <span>Books</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="resources">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai1" class="lni lni-layout"></i>
                            <span>E-resources</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="Past-papers">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai2" class="lni lni-popup"></i>
                            <span>Past Paper</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" id="articles">
                        <i class="fa-regular fa-newspaper"></i>
                            <span>Articles and Megacine</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i id="sidebar-ai4" class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
        </div>
            <div class="show-details ">
                <div class="profile-info" id="personal">
                    <h1>Personal Information</h1>
                    <div class="profile-image">
                    <img src="../assets/media/admin-page/avatar.png" alt="avatar">
                    </div> 
                    <h2>Admin Name:</h2>
                    <input type="text" name="name" id="name" value="Hajith">
                    <h2>Admin email:</h2>
                    <input type="e-mail" name="mail" id="mail" value="hanoufaatif@gmail.com">
                    <h2>Mobile No:</h2>
                    <input type="text" name="mobile" id="mobile" value="0740523954">
                    <h2>Adsress:</h2>
                    <input type="text" name="addr" id="addr" value="Central Beach Road, Palamunai-11,Arayampathy, Batticaloa.">
                    <input type="button" value="Ubdate" name="btn" id="btn">
                </div>
                <div class="users">
                    <h1>Users' Informations</h1>
                    <div class="user-info">
                        <div class="userbtn">
                            <i class="fa-regular fa-eye" style="color: #460202;"></i>
                            <h4>View User</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-check" style="color: #460202;"></i>
                            <h4>Add Users</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-circle-xmark" style="color: #460202;"></i>
                            <h4>Remove Users</h4>
                        </div>
                    </div> 
                </div>
                <div class="books" >
                    <h1>Book Information</h1>
                    <div class="book-info" id="books">
                        <div class="bookbtn">
                            <i class="fa-solid fa-book" style="color: #460202;"></i>
                            <p id="count">2</p>
                            <h4>Book Listed</h4>
                        </div>
                        <div class="bookbtn">
                            <i class="fa-solid fa-bars" style="color: #460202;"></i>
                            <p id="count">5</p>
                            <h4>Issued Books</h4>
                        </div>
                        <div class="bookbtn">
                            <i class="fa-solid fa-recycle" style="color: #460202;"></i>
                            <p id="count">3</p>
                            <h4>Book Return</h4>
                        </div>
                        <div class="bookbtn">
                            <i class="fa-solid fa-user" style="color: #460202;"></i>
                            <p id="count">1</p>
                            <h4>Author listed</h4>
                        </div>
                        <div class="bookbtn">
                            <i class="fa-solid fa-list" style="color: #460202;"></i>
                            <p id="count">9</p>
                            <h4>Listed Cotegories</h4>
                        </div>
                        <div class="bookbtn">
                            <i class="fa-solid fa-list" style="color: #460202;"></i>
                            <p id="count">6</p>
                            <h4>Listed Cotegories</h4>
                        </div>
                </div> 
            </div>
        </div>
</body>
</html>


