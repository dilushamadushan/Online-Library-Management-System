<?php
    include("header.php");
    include("config.php");
   
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
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .rounded-image {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .scrollable-table {
            max-height: 400px;
            overflow-y: auto;
        }
       
    </style>
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
                <img src="assets/media/admin-page/avatar.png" alt="avatar" class="rounded-image">
            </div> 
            <?php
                $admin_sql = "SELECT * FROM user_table WHERE user_role='admin' LIMIT 1";
                $admin_result = mysqli_query($conn, $admin_sql);
                $admin_data = mysqli_fetch_assoc($admin_result);
            ?>
            <form method="post" class="w-100">
                <div class="mb-3">
                    <label for="name" class="form-label">Admin Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($admin_data['User_Nmae']); ?>">
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Admin email:</label>
                    <input type="email" name="mail" id="mail" class="form-control" value="<?php echo htmlspecialchars($admin_data['User_Emaiil']); ?>">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile No:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo htmlspecialchars($admin_data['User_Mobile']); ?>">
                </div>
                <div class="mb-3">
                    <label for="addr" class="form-label">Address:</label>
                    <input type="text" name="addr" id="addr" class="form-control" value="<?php echo htmlspecialchars($admin_data['User_Address']); ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Update" name="btn" id="btn" class="btn btn-primary">
                </div>
            </form>
            <?php 
                if(isset($_POST['btn'])){
                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $mobile = $_POST['mobile'];
                    $addr = $_POST['addr'];

                    $check_sql = "SELECT * FROM user_table WHERE (User_Nmae=? OR User_Emaiil=? OR User_Mobile=?) AND user_id != ?";
                    $check_stmt = mysqli_prepare($conn, $check_sql);
                    mysqli_stmt_bind_param($check_stmt, "ssss", $name, $mail, $mobile, $admin_data['user_id']);
                    mysqli_stmt_execute($check_stmt);
                    $check_result = mysqli_stmt_get_result($check_stmt);

                    if(mysqli_num_rows($check_result) > 0){
                        echo "<script>alert('Details already exist');</script>";
                    } else {
                        $sql = "UPDATE user_table SET User_Nmae =?, User_Emaiil=?, User_Mobile=?, User_Address=? WHERE user_id=?";
                        $stmt = mysqli_prepare($conn, $sql);
                        mysqli_stmt_bind_param($stmt, "sssss", $name, $mail, $mobile, $addr, $admin_data['user_id']);
                        $result = mysqli_stmt_execute($stmt);

                        if($result){
                            echo "<script>alert('Updated Successfully');</script>";
                        } else {
                            echo "<script>alert('Update Failed');</script>";
                        }
                    }
                }
            ?>
            </div>

            <div class="users" id="menue2">
                <h1>Users' Informations</h1>
                <div class="book-listed scrollable-table" style="display: block;" id="user2">
                    <div class="search input-group mb-3">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter user name">
                        <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                    </div>
                    <table class="table-responsive">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>E-mail</th>
                                <th>Mobile No</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM user_table";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['user_id']."</td>";
                                    echo "<td>".$row['User_Nmae']."</td>";
                                    echo "<td>".$row['User_Emaiil']."</td>";
                                    echo "<td>".$row['User_Mobile']."</td>";
                                    echo "<td>".$row['User_Address']."</td>";
                                    echo "<td><img src='profile/".$row['User_profile']."' alt='User Image' width='50' class='rounded-image'></td>";
                                    echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                    echo "<td><button class='btn btn-danger'>Delete</button></td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="add_new_user(2)">Add New</button>
                    </div>
                </div>
                <div class="add-new-popup" id="popup2">
                    <h1>Add New User</h1>
                    <form action="add-new.php" method="post" id="new-popup" enctype="multipart/form-data">
                        <div class="error">
                            <?php
                            if (isset($_SESSION['message'])) {
                                echo "<script>
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Message',
                                            text: '".$_SESSION['message']."'
                                        });
                                    </script>";
                                unset($_SESSION['message']);
                            }
                            ?>
                        </div>
                        <input type="text" name="name" id="name" placeholder="Enter User Name:" required>
                        <input type="email" name="mail" id="mail" placeholder="Enter Email" required>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No:" required>
                        <input type="text" name="addr" id="addr" placeholder="Enter User Address" required>
                        <input type="file" name="image" id="image" accept="image/*" required>
                        <input type="submit" value="Add New" id="new-btn" name="new-btn">
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
                    <div class="bookbtn" onclick="showBooklist(2,4)">
                        <i class="fa-solid fa-user"></i>
                        <p id="count">1</p>
                        <h4>Author listed</h4>
                    </div>
                    <div class="bookbtn" onclick="showBooklist(2,5)">
                        <i class="fa-solid fa-list"></i>
                        <p id="count">9</p>
                        <h4>Listed Categories</h4>
                    </div>
                </div>
                <div class="book-listed scrollable-table" id="list1">
                    <div class="search input-group mb-3">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                        <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Book Name</th>
                                <th>ISBN Number</th>
                                <th>Subject</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM book_table";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$row['Number']."</td>";
                                        echo "<td>".$row['Book_Name']."</td>";
                                        echo "<td>".$row['ISBN_no']."</td>";
                                        echo "<td>".$row['Subject']."</td>";
                                        echo "<td>".$row['Author']."</td>";
                                        echo "<td>".$row['category']."</td>";
                                        echo "<td><a href='#'>Edit</a></td>";
                                        echo "<td><a href='#'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(1)">Add New</button>
                        <button class="button" onclick="exit(2,2)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>
                <div class="book-listed scrollable-table" id="list2">
                    <div class="search input-group mb-3">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                        <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>User ID</th>
                                <th>Borrowed Date</th>
                                <th>Return Date</th>
                                <th>Action</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM book_user_table";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$row['b_id']."</td>";
                                        echo "<td>".$row['user_id']."</td>";
                                        echo "<td>".$row['barrowed_date']."</td>";
                                        echo "<td>".$row['return_date']."</td>";
                                        echo "<td>".$row['action']."</td>";
                                        echo "<td><a href='#'>Edit</a></td>";
                                        echo "<td><a href='#'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button" onclick="book_add_new(2)">Add New</button>
                        <button class="button" onclick="exit(2,2)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>
                
                <div class="book-listed scrollable-table" id="list5">
                    <div class="search input-group mb-3">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                        <a href="../Online-Library-Management-System/add_new_pages/users.php" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
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
                            <?php
                                $sql = "SELECT * FROM book_table";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$row['Author']."</td>";
                                        echo "<td>".$row['book_name']."</td>";
                                        echo "<td>".$row['subject']."</td>";
                                        echo "<td><a href='#'>Edit</a></td>";
                                        echo "<td><a href='#'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                        </tbody>
                    </table>
                    <div class="button-for-more">
                        <button class="button"onclick="book_add_new(5)">Add New</button>
                        <button class="button" onclick="exit(2,5)">Back <i class="fa-solid fa-backward"></i></button>
                    </div>
                </div>

                <div class="add-new-popup" id="book-popup1">
                    <h1 id="add-new-head">Add New Book</h1>
                    <form action="add-new.php" method="post" id="new-popup">
                    <div class="error"></div>
                        <input type="text" name="b-name" id="b-name" placeholder="Enter Book Name:" >
                        <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN Number" >
                        <input type="text" name="b-subject" id="b-subject" placeholder="Enter The subject of Book" >
                        <input type="text" name="b-author" id="b-author" placeholder="Enter Author Name" >
                        <input type="submit" value="Add New" id="new-btn" name="add-new2">
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
                    <div class="book-listed scrollable-table" style="display: block;" id="user4">
                        <div class="search input-group mb-3">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                            <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                        </div>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th>Book Id</th>
                                    <th>Name</th>
                                    <th>ISBN Number</th>
                                    <th>Subject</th>
                                    <th>Author</th>
                                    <th>Publish Year</th>
                                    <th>Image</th>
                                    <th>PDF</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM e_book_table";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['e_book_id']."</td>";
                                            echo "<td>".$row['e_book_name']."</td>";
                                            echo "<td>".$row['ISBN_no']."</td>";
                                            echo "<td>".$row['subject']."</td>";
                                            echo "<td>".$row['author']."</td>";
                                            echo "<td>".$row['publish_year']."</td>";
                                            echo "<td><img src='cover_folder/".$row['image']."' alt='Book Image' width='50' class='rounded-image'></td>";
                                            echo "<td><a class='btn btn-success' href='E_books/".$row['pdf']."' download>Download PDF</a></td>";
                                            echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                            echo "<td><button class='btn btn-danger'>Delete</button></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <div class="button-for-more">
                            <button class="button" onclick="add_new_user(4)">Add New</button>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup4">
                    <h1>Add New User</h1>
                    <form action="add-new.php" method="post" id="new-popup" enctype="multipart/form-data">
                    <div class="error"></div>
                        <input type="text" name="eb-name" id="name" placeholder="Enter E-book Name:" >
                        <input type="text" name="ISB-no" id="mail" placeholder="Enter ISBN Number" >
                        <input type="text" name="subject" id="mobile" placeholder="Subject" >
                        <input type="text" name="year" id="addr" placeholder="Year" >
                        <input type="file" name="image" id="addr">
                        <input type="file" name="pdf" id="addr">
                        <input type="submit" value="Add New" id="new-btn" name="add-new-ebook">
                    </form>
                </div> 
            </div>

            <div class="resources" id="menue5">
                <h1>Past Papers</h1>
                <div class="book-listed scrollable-table" style="display: block;" id="user5">
                        <div class="search input-group mb-3">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                            <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                        </div>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Subject Of Pastpaper</th>
                                    <th>Examination</th>
                                    <th>Year</th>
                                    <th>PDF</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM past_paper_table";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['p_id']."</td>";
                                            echo "<td>".$row['subject']."</td>";
                                            echo "<td>".$row['examination_typ']."</td>";
                                            echo "<td>".$row['year']."</td>";
                                            echo "<td><a class='btn btn-success' href='Past_papers/".$row['pdf']."' download>Download PDF</a></td>";
                                            echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                            echo "<td><button class='btn btn-danger'>Delete</button></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup5">
                    <h1>Add New Past Paper</h1>
                    <form action="add-new.php" method="post" id="new-popup" enctype="multipart/form-data">
                    <div class="error"></div>
                        <input type="text" name="p-subject" id="p-subject" placeholder="Enter Subject of Past paper:" >
                        <input type="text" name="exam" id="exam" placeholder="Enter Examination" >
                        <input type="text" name="year" id="year" placeholder="Enter the year" >
                        <input type="file" name="pdf" id="pdf" accept="pdf/*">
                        <input type="submit" value="Add New" id="new-btn" name="add-new-paper">
                    </form>
                </div> 
                </div>
            </div> <!-- Missing closing div tag added here -->
            <div class="resources" id="menue6">
                    <h1>Article and Megazine</h1>
                    <div class="book-listed scrollable-table" style="display: block;" id="user6">
                        <div class="search input-group mb-3">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Enter the book name">
                            <a href="#" class="btn btn-outline-secondary ms-2" id="btn-search">Search</a>
                        </div>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Writer</th>
                                    <th>Type</th>
                                    <th>Publish Date</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT * FROM articles_table";
                                $stmt = mysqli_prepare($conn, $sql);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                                if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['writer']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['type']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['publish_date']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                                    echo "<td><img src='cover_folder/".$row['image']."' alt='Article Image' width='50' class='rounded-image'></td>";
                                    echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                    echo "<td><button class='btn btn-danger'>Delete</button></td>";
                                    echo "</tr>";
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="button-for-more">
                            <button class="button" onclick="add_new_user(6)">Add New</button>
                        </div>
                    </div>
                    <div class="add-new-popup" id="popup6">
                        <h1>Add New Article/Megazine</h1>
                        <form action="add-new.php" method="post" id="new-popup" enctype="multipart/form-data">
                            <div class="error"></div>
                            <input type="text" name="art-name" id="art-name" placeholder="Enter Name:" >
                            <input type="text" name="type" id="type" placeholder="Enter Type" >
                            <input type="text" name="writer" id="subject" placeholder="Writer Name" >
                            <input type="date" name="date" id="subject" placeholder="Date" >
                            <textarea name="description" id="description"></textarea>
                            <input type="file" name="image" id="image" accept="image/*">
                            <input type="file" name="pdf" id="pdf" accept="pdf/*">
                            <input type="submit" value="Add New" id="new-btn" name="add-new-notice">
                        </form>
                    </div> 
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
        document.querySelector("#sidebar").classList.add("expand");
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

    const showEvwntsandNews= function (num2) {
        const books=document.querySelector(`#events`)
        const list=document.querySelector(`#event-list${num2}`)
        books.style.display="none"
        list.style.display="block"
    }

    const event_add_new=(num)=>{
    const books_div=document.querySelector("#events")
    const option=document.querySelector(`#event-popup${num}`)

    books_div.style.display="none";
    option.classList.add("to-add-popup-class")

   }
   const event_exit=function(num2){
        const books=document.querySelector(`#events`)
        const list=document.querySelector(`#event-list${num2}`)
        books.style.display="flex"
        list.style.display="none"
    }



</script>

<?php
    include("footer.php");
?>