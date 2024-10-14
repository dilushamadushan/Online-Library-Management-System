<?php
    include("../header.php");
?>
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

<div class="container">
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
                    <li class="sidebar-item" >
                        <a href="#" class="sidebar-link" onclick="showMenues(1)">
                            <i id="sidebar-i" class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item" onclick="showMenues(2)" >
                        <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item" onclick="showMenues(3)">
                        <a href="#" class="sidebar-link ">
                            <i class="lni lni-book"></i>
                            <span>Books</span>
                        </a>
                    </li>
                    <li class="sidebar-item" onclick="showMenues(4)">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai1" class="lni lni-layout"></i>
                            <span>E-resources</span>
                        </a>
                    </li>
                    <li class="sidebar-item" onclick="showMenues(5)">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai2" class="lni lni-popup"></i>
                            <span>Past Paper</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" onclick="showMenues(6)">
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
                <div class="profile-info" id="menue1">
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
                <div class="users" id="menue2">
                    <h1>Users' Informations</h1>
                    <div class="user-info">
                        <div class="userbtn">
                            <i class="fa-regular fa-eye"></i>
                            <h4>View User</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-check" ></i>
                            <h4>Add Users</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-circle-xmark" ></i>
                            <h4>Remove Users</h4>
                        </div>
                    </div> 
                </div>
                <div class="books" id="menue3">
                    <h1>Book Information</h1>
                    <div class="book-info" id="books">
                        <div class="bookbtn" onclick="showBooklist(1)">
                            <i class="fa-solid fa-book" ></i>
                            <p id="count">2</p>
                            <h4>Book Listed</h4>
                        </div>
                        <div class="bookbtn" onclick="showBooklist(2)">
                            <i class="fa-solid fa-bars" ></i>
                            <p id="count">5</p>
                            <h4>Issued Books</h4>
                        </div>
                        <div class="bookbtn" onclick="showBooklist(3)">
                            <i class="fa-solid fa-recycle"></i>
                            <p id="count">3</p>
                            <h4>Book Return</h4>
                        </div>
                        <div class="bookbtn" onclick="showBooklist(4)">
                            <i class="fa-solid fa-user"></i>
                            <p id="count">1</p>
                            <h4>Author listed</h4>
                        </div>
                        <div class="bookbtn" onclick="showBooklist(5)">
                            <i class="fa-solid fa-list"></i>
                            <p id="count">9</p>
                            <h4>Listed Cotegories</h4>
                        </div>
                        <div class="bookbtn" onclick="showBooklist(6)">
                            <i class="fa-solid fa-list"></i>
                            <p id="count">6</p>
                            <h4>Listed Cotegories</h4>
                        </div>
                    </div> 
                    <div class="book-listed" id="list1">
                        <table>
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Book Name</th>
                                    <th>ISBN Number</th>
                                    <th>Subject of Book</th>
                                    <th>Author</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Python</td>
                                    <td>ISB0023456</td>
                                    <td>Fundamentals of programming</td>
                                    <td>Sam Judson</td>
                                    <td><i class="fa-regular fa-pen-to-square" style="color: #1f3356;"></i></td>
                                    <td><i class="fa-solid fa-trash" style="color: rgb(70,2,2);"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="button" onclick="exit(1)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>
                <div class="resources" id="menue4">
                        <h1>E-resorces</h1>
                        <div class="user-info">
                            <div class="userbtn">
                                <i class="fa-regular fa-eye" ></i>
                                <h4>View Resources</h4>
                            </div>
                            <div class="userbtn">
                                <i class="fa-solid fa-check" ></i>
                                <h4>Add Resources</h4>
                            </div>
                            <div class="userbtn">
                                <i class="fa-solid fa-circle-xmark"></i>
                                <h4>Remove Resorces</h4>
                            </div>
                        </div> 
                </div>
                <div class="resources" id="menue5">
                    <h1>Past Papers</h1>
                    <div class="user-info">
                        <div class="userbtn">
                            <i class="fa-regular fa-eye" style="color: #460202;"></i>
                            <h4>View Past papers</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-check" style="color: #460202;"></i>
                            <h4>Add Past papers</h4>
                        </div>
                        <div class="userbtn">
                            <i class="fa-solid fa-circle-xmark" style="color: #460202;"></i>
                            <h4>Remove Past papers</h4>
                        </div>
                    </div> 
                </div>
                    <div class="resources" id="menue6">
                        <h1>Article and Megazine</h1>
                        <div class="user-info">
                            <div class="userbtn">
                                <i class="fa-regular fa-eye"></i>
                                <h6>View Article and Megazine</h6>
                            </div>
                            <div class="userbtn">
                                <i class="fa-solid fa-check"></i>
                                <h6>Add Article and Megazine</h6>
                            </div>
                            <div class="userbtn">
                                <i class="fa-solid fa-circle-xmark"></i>
                                <h6>  Remove Article and Megazine</h6>
                            </div>
                        </div> 
                    </div>
            </div>
</div>
    
<script>
    const showMenues = function (num) {
        const allMenus = document.querySelectorAll('[id^="menue"]');
        
        allMenus.forEach(menu => {
            menu.style.display = "none";
        });

        const menue = document.querySelector(`#menue${num}`);
        if (menue) {
            if (num == 1) {
                menue.style.display = "flex";
            } else {
                menue.style.display = "block";
            }
        } else {
            console.error(`Menu #menue${num} not found`);
        }
    };
    window.onload = function() {
        showMenues(1);
    };

    const showBooklist= function (num) {
        const books=document.querySelector("#books")
        const list=document.querySelector(`#list${num}`)
        console.log(list)
        
        books.style.display="none"
        list.style.display="block"
    }

    const exit=function(num){
        const books=document.querySelector("#books")
        const list=document.querySelector(`#list${num}`)
        books.style.display="flex"
        list.style.display="none"
    }
</script>
