<?php
    include("header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/admin-pannel.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="assets/js/admin-pannel.js"></script>
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
                <div class="book-listed" style="display: block;" id="user2">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter user name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>E-mail</th>
                                <th>Mobile No</th>
                                <th>Address</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="add_new_user(2)">Add New</button>
                    </div>
                </div>
                <div class="add-new-popup" id="popup2">
                    <h1>Add New User</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="name" id="name" placeholder="Enter User Name:" >
                        <input type="text" name="mail" id="mail" placeholder="Enter Email" >
                        <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No:" >
                        <input type="text" name="addr" id="addr" placeholder="Enter User Address" >
                        <input type="submit" value="Add New " id="new-btn">
                    </form>
                </div> 
            </div>

            <div class="books" id="menue3">
                <h1>Book Information</h1>
                <div class="book-info" id="books2" id="user3">
                    <div class="bookbtn" onclick="showBooklist(2,1)">
                        <i class="fa-solid fa-book" ></i>
                        <p id="count">2</p>
                        <h4>Book Listed</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,2)">
                        <i class="fa-solid fa-bars" ></i>
                        <p id="count">5</p>
                        <h4>Issued Books</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,3)">
                        <i class="fa-solid fa-recycle"></i>
                        <p id="count">3</p>
                        <h4>Book Return</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,4)">
                        <i class="fa-solid fa-user"></i>
                        <p id="count">1</p>
                        <h4>Author listed</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,5)">
                        <i class="fa-solid fa-list"></i>
                        <p id="count">9</p>
                        <h4>Listed Cotegories</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,6)">
                        <i class="fa-solid fa-list"></i>
                        <p id="count">6</p>
                        <h4>Listed Cotegories</h4>
                    </div>
                </div>
                <div class="book-listed" id="list1">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter the book name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
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
                            
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(1)">Add New</button>
                        <button class="button" onclick="exit(2,2)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>
                <div class="book-listed" id="list2">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter the book name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>User Name</th>
                                <th>Subject of Book</th>
                                <th>Date of return</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(2)">Add New</button>
                        <button class="button" onclick="exit(2,2)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                    
                </div>
                <div class="book-listed" id="list3">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter the book name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>User Name</th>
                                <th>Date of return</th>
                                <th colspan="2">Return status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(3)">Add New</button>
                        <button class="button" onclick="exit(2,3)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                    
                </div>
                <div class="book-listed" id="list4">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter the book name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Auther Name</th>
                                <th>Book Name</th>
                                <th>Subject of Book</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(4)">Add New</button>
                        <button class="button" onclick="exit(2,4)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>>
                </div>
                <div class="book-listed" id="list5">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Enter the book name">
                        <input type="button" name="btn-search" id="btn-search" value="Search">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Auther Name</th>
                                <th>Book Name</th>
                                <th>Subject of Book</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button"onclick="book_add_new(5
                        )">Add New</button>
                        <button class="button" onclick="exit(2,5)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>

                <div class="add-new-popup" id="book-popup1">
                    <h1 id="add-new-head">Add New Book</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="b-name" id="b-name" placeholder="Enter Book Name:" >
                        <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN Number" >
                        <input type="text" name="b-subject" id="b-subject" placeholder="Enter The subject of Book" >
                        <input type="text" name="b-author" id="b-author" placeholder="Enter Author Name" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
                <div class="add-new-popup" id="book-popup2">
                    <h1 id="add-new-head">Add New Issued Book</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="ib-name" id="ib-name" placeholder="Enter Book Name" >
                        <input type="text" name="ib-user" id="ib-user" placeholder="Enter User Name">
                        <input type="date" name="ib-date" id="ib-date" placeholder="Enter the Date of Issue" >
                        <input type="date" name="ib-return" id="ib-return" placeholder="Enter the date want to return" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
                <div class="add-new-popup" id="book-popup3">
                    <h1 id="add-new-head">Add New Returned Book</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="rb-name" id="rb-name" placeholder="Enter Book Nmae" >
                        <input type="text" name="rb-user" id="rb-user" placeholder="Enter User Name" >
                        <input type="date" name="rb-date" id="rb-date" placeholder="Returned date" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
                <div class="add-new-popup" id="book-popup4">
                    <h1 id="add-new-head">Add New Author</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="a-name" id="a-name" placeholder="Enter Author Name:" >
                        <input type="text" name="ab-name" id="ab-name" placeholder="Enter Book Name" >
                        <input type="text" name="ab-subject" id="ab-subject" placeholder="Enter the subject of Book:" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
                <div class="add-new-popup" id="book-popup5">
                    <h1 id="add-new-head">Add New Book Category</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="c-name" id="c-name" placeholder="Enter Book Category" >
                        <input type="text" name="cb-name" id="cb-name" placeholder="Book Name">
                        <input type="text" name="c-qty" id="c-qty" placeholder="Enter the Book Quantity">
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
            </div>
            <div class="resources" id="menue4">
                    <h1>E-resorces</h1>
                    <div class="book-listed" style="display: block;" id="user4">
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Enter the book name">
                            <input type="button" name="btn-search" id="btn-search" value="Search">
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Auther Name</th>
                                    <th>Book Name</th>
                                    <th>Subject of Book</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="button-for-more">
                            <button class="button" onclick="add_new_user(4)">Add New</button>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup4">
                    <h1>Add New User</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="name" id="name" placeholder="Enter User Name:" >
                        <input type="text" name="mail" id="mail" placeholder="Enter Email" >
                        <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No:" >
                        <input type="text" name="addr" id="addr" placeholder="Enter User Address" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
            </div>

            <div class="resources" id="menue5">
                <h1>Past Papers</h1>
                <div class="book-listed" style="display: block;" id="user5">
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Enter the book name">
                            <input type="button" name="btn-search" id="btn-search" value="Search">
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Subject Of Pastpaper</th>
                                    <th>Examination</th>
                                    <th>Year</th>
                                    <th>Language</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="button-for-more">
                            <button class="button" onclick="add_new_user(5)">Add New</button>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup5">
                    <h1>Add New Past Paper</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="p-subject" id="p-subject" placeholder="Enter Subject of Past paper:" >
                        <input type="text" name="exam" id="exam" placeholder="Enter Examination" >
                        <input type="text" name="year" id="year" placeholder="Enter the year" >
                        <input type="text" name="lag" id="lan" placeholder="Enter the language" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
                </div> 
                </div>

                <div class="resources" id="menue6">
                    <h1>Article and Megazine</h1>
                    <div class="book-listed" style="display: block;" id="user6">
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Enter the book name">
                            <input type="button" name="btn-search" id="btn-search" value="Search">
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Subject</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="button-for-more">
                            <button class="button" onclick="add_new_user(6)">Add New</button>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup6">
                    <h1>Add New Article/Megazine</h1>
                    <form action="#" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="art-name" id="art-name" placeholder="Enter Name:" >
                        <input type="text" name="type" id="type" placeholder="Enter Type" >
                        <input type="text" name="subject" id="subject" placeholder="Subject" >
                        <input type="submit" value="Add New" id="new-btn">
                    </form>
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

    const showBooklist= function (num1,num2) {
        const books=document.querySelector(`#books${num1}`)
        const list=document.querySelector(`#list${num2}`)
        books.style.display="none"
        list.style.display="block"
    }
    const exit=function(num1,num2){
        const books=document.querySelector(`#books${num1}`)
        const list=document.querySelector(`#list${num2}`)
        books.style.display="flex"
        list.style.display="none"
    }

    const add_new_user=(num)=>{
        const div=document.querySelector(`#user${num}`)
        const popup=document.querySelector(`#popup${num}`)
        
      

        div.style.display="none";
        popup.classList.add("to-add-popup-class")
        console.log(popup);
        
    }
   const book_add_new=(num)=>{
    const books_div=document.querySelector("#books2")
    const option=document.querySelector(`#book-popup${num}`)

    books_div.style.display="none";
    option.classList.add("to-add-popup-class")

   }
    const hamBurger = document.querySelector(".toggle-btn");
    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
    });

</script>
<?php include("footer.php") ?>
