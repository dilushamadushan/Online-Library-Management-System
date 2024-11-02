<?php include "config.php"?>

<?php
    $sql_book = "SELECT COUNT(book_id) AS book_count  FROM book_table;";
    $sql_user = "SELECT COUNT(user_id) AS user_count FROM user_table;";
    $sql_ebook = "SELECT COUNT(e_book_id) AS ebook_count FROM e_book_table;";
    $sql_author = "SELECT COUNT(a_id) AS author_count FROM author_table;";

    $result_book = $conn->query($sql_book);
    $result_user = $conn->query($sql_user);
    $result_ebook = $conn->query($sql_ebook);
    $result_author = $conn->query($sql_author);

    $book_count = ($result_book && $result_book->num_rows > 0) ? $result_book->fetch_assoc()['book_count'] : 0;
    $user_count = ($result_user && $result_user->num_rows > 0) ? $result_user->fetch_assoc()['user_count'] : 0;
    $ebook_count = ($result_ebook && $result_ebook->num_rows > 0) ? $result_ebook->fetch_assoc()['ebook_count'] : 0;
    $author_count = ($result_author && $result_author->num_rows > 0) ? $result_author->fetch_assoc()['author_count'] : 0;

    $cookieName = "user_agreement";
    $cookieValue = "accepted";

    if (isset($_GET['acceptcookies'])) {
        $cookieExpiration = time() + (60 * 60 * 24 * 7); 
        setcookie($cookieName, $cookieValue, $cookieExpiration, "/");
        header("Location: index.php");
        exit();
    }
?>

<?php include("header.php");?>

<head>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<div id="cookiePopup" class="hide">
    <div class="close-coockies">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <img src="assets/media/cookies.jpg" alt="">
    <p>      
        Our website uses cookies to enhance your browsing experience and provide relevant information. By continuing to use our website, you agree to our use of cookies.
    </p>
    <form action="index.php" method="GET">
        <button id="acceptcookies" name="acceptcookies">Accept</button>
    </form>
</div>
<div class="section_1">   
        <div id="con">
        <div class="con-main">
           <h1 class="fw-bolder">Welcome To Our <span> Library </span></h1>
            <p class="fw-medium">Here, you can explore a wide range of books, e-books, and resources. 
               Use the search bar to find what you're looking for, check out featured books, or
               browse different categories. If you're a member, log in to see your account details and manage your loans. 
               Not a member yet? Sign up easily to start borrowing today !</p>

            <div class="d-grid gap-2 d-md-block home-btn">
                <button type="button" class="btn btn-outline-light btn-lg btn_find">Find Book</button>
                <button type="button" class="btn btn-outline-light btn-lg" onclick="location.href='#qas';">See More</button>
            </div>
        </div>
        </div>
</div>
<div class="quick-access-section" id="qas">
<div class="sec-title">
    <h2 class="fw-bold">Quickly Access Page</h2>
    <p>Welcome to the Most Popular Library Today</p>
    </div>
    <div class="decorative-line-wrapper">
        <div class="decorative-line"></div>
        <i class="fa-solid fa-book"></i>
        <div class="decorative-line"></div>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 mb-4">
            <div class="content-card">
                <img src="assets/media/home-main/book.jpg" alt="Book Image" class="img-fluid">
                <h4>BOOK</h4>
                <p>Explore our collection of physical and digital books across various genres.</p>
                <button class="read-more-btn" onclick="location.href='book.php';">Read More</button>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="content-card">
                <img src="assets/media/home-main/maga.jfif" alt="Magazine Image" class="img-fluid">
                <h4>MAG & ARTICLE</h4>
                <p>Stay updated with the latest articles and magazines on diverse topics. </p>
                <button class="read-more-btn" onclick="location.href='mag-artical.php';">Read More</button>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="content-card">
                <img src="assets/media/home-main/author.png" alt="Journal Image" class="img-fluid">
                <h4>AUTHOR</h4>
                <p>Discover works from both emerging and renowned authors in our library.</p>
                <button class="read-more-btn" onclick="location.href='author.php';">Read More</button>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="content-card">
                <img src="assets/media/home-main/e-book.png" alt="Newspaper Image" class="img-fluid">
                <h4>E-BOOK</h4>
                <p>Explore our collection of digital books across various genres.</p>
                <button class="read-more-btn" onclick="location.href='e-book.php';">Read More</button>
            </div>
        </div>
    </div>
</div>

<div class="book-section reveal">
<div class="sec-title">
    <h2 class="fw-bold">Latest Arrivals</h2>
    <p>Check out the newest additions to our library collection</p>
</div>
<div class="decorative-line-wrapper">
        <div class="decorative-line"></div>
        <i class="fa-solid fa-book"></i>
        <div class="decorative-line"></div>
    </div>
    <div class="book-conten">

        <div class="bookbtn-nb"><i class="fa-solid fa-circle-chevron-left" id="backbtn"></i></div>
        <div class="book-werp">
<!--
<div class="book-con-card">
<?php
//$sqlb1 = "SELECT image, book_name, Auther_id, publish_year FROM book_table ORDER BY publish_year DESC LIMIT 4 ";
//$resultb2 = $conn->query($sqlb1);
//if ($resultb1->num_rows > 0) {
//    while($rowb1 = $resultb1->fetch_assoc()) {
//        echo '<div class="box">';
//        echo '<img src="' . htmlspecialchars($rowb1["image"]) . '" alt="">';
//        echo '<div class="overlay">';
//        echo '<h3>' . htmlspecialchars($rowb1["book_name"]) . '</h3>';
//        echo '<p>' . htmlspecialchars($rowb1["Auther_id"]) . '</p>';
//        echo '<span>' . htmlspecialchars($rowb1["publish_year"]) . '</span>';
//        echo '</div>';
//        echo '</div>';
//    }
//} else {
//    echo "<p>No books found</p>";
//}
//?>
</div>
<div class="book-con-card">
<?php
//$sqlb2 = "SELECT image, book_name, Auther_id, publish_year FROM book_table ORDER BY publish_year DESC LIMIT 4 OFFSET 4";
//$resultb2 = $conn->query($sqlb2);
//if ($resultb2->num_rows > 0) {
//    while($rowb2 = $resultb2->fetch_assoc()) {
//        echo '<div class="box">';
//        echo '<img src="' . htmlspecialchars($rowb2["image"]) . '" alt="">';
//        echo '<div class="overlay">';
//        echo '<h3>' . htmlspecialchars($rowb2["book_name"]) . '</h3>';
//        echo '<p>' . htmlspecialchars($rowb2["Auther_id"]) . '</p>';
//        echo '<span>' . htmlspecialchars($rowb2["publish_year"]) . '</span>';
//        echo '</div>';
//        echo '</div>';
//    }
//} else {
//    echo "<p>No books found</p>";
//}
?>

</div>
-->

     
            <div class="book-con-card">

                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>

            </div>
            <div class="book-con-card">

                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>

                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/media/home-main/temp.webp" alt="">
                    <div class="overlay">
                        <h3>Harry Potter</h3>
                        <p>Jk Roline</p>
                        <span>Publich year</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bookbtn-nb"><i class="fa-solid fa-circle-chevron-right" id="nextbtn"></i></div>
    </div>
</div>

<div class="news-section reveal">
    <div class="sec-title">
    <h2 class="fw-bold">Top Event</h2>
    <p>Stay Updated with Our Newest Library Event!</p>
    </div>
    <div class="decorative-line-wrapper">
        <div class="decorative-line"></div>
        <i class="fa-solid fa-newspaper"></i>
        <div class="decorative-line"></div>
    </div>
    <div class="news-card-main row mt-5">


    <?php 
    //    $color_arr = array('bg-success', 'bg-primary', 'bg-danger', 'bg-success');
    //    $news_result = mysqli_query($conn, "SELECT * FROM event_table ORDER BY event_name DESC LIMIT 4");
    //    $countN = 0;
    //    if (mysqli_num_rows($news_result) > 0) {

    //        while ($rowS = mysqli_fetch_assoc($news_result)) {
    //        
    //            echo '<div class="col-md-6 mb-3">';
    //            echo '<div class="news-card">';
    //            echo '<div class="news-cardImg">';
    //            echo '<img src="' . htmlspecialchars($rowS["image"]) . '" alt="">';
    //            echo '</div>';
    //            echo '<div class="news-cardContent ' . $color_arr[$countN] . '">'; 
    //            echo '<h4>' . htmlspecialchars($rowS["event_name"]) . '</h4>';
    //            echo '<p>' . htmlspecialchars($rowS["description"]) . '</p>';
    //            echo '<a href="#">Read more</a>';
    //            echo '</div>';
    //            echo '</div>';
    //            echo '</div>';

    //            $countN = ($countN + 1) % count($color_arr);  
    //        }
    //    }

?>

 <div class="col-md-6 mb-3">
            <div class="news-card">
                <div class="news-cardImg">
                    <img src="assets/media/home-main/news1.jpg" alt="no image">
                </div>
                <div class="news-cardContent bg-success">
                    <h4>New Book Arrival</h4>
                    <p>Discover our latest addition to the history section.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="news-card">
                <div class="news-cardImg">
                    <img src="assets/media/home-main/news2.png" alt="no image">
                </div>
                <div class="news-cardContent bg-primary">
                    <h4>Weekly Journal Update</h4>
                    <p>The newest scientific journals are now available.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="news-card">
                <div class="news-cardImg">
                    <img src="assets/media/home-main/new3.png" alt="no image">
                </div>
                <div class="news-cardContent bg-danger">
                    <h4>Author Visit Announcement</h4>
                    <p>Meet your favorite author this weekend at the library.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="news-card">
                <div class="news-cardImg">
                    <img src="assets/media/home-main/news4.avif" alt="no image">
                </div>
                <div class="news-cardContent bg-success">
                    <h4>New Digital Resources</h4>
                    <p>Access the latest e-books in our digital library.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-section reveal">
        <div class="about-content">
            <div class="about-text">
                <h1 class="fw-bold">About Us</h1>
                <p class="container fw-normal">Welcome to our library, a place where knowledge meets community. 
                    We offer a vast collection of books, e-books, and other resources
                     to inspire learning and exploration. Our mission is to provide a 
                     welcoming space for readers of all ages to discover new ideas, connect
                      with others, and access valuable information. Whether you're here to study, 
                      research, or 
                    relax with a good book, we're here to support your journey.</p>
                    <button type="button" class="btn">See More</button>
            </div>
            <div class="about-img">
               <img src="assets/media/home-main/man.png" class="man">
               <img src="assets/media/home-main/elements.png" class="element">
            </div>
        </div>
</div>
?>
<div class="status-section reveal">
    <div class="status-card-main row mt-5">
        <div class="col-md-3 mb-5">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-book-open-reader"></i></div>
                <div class="status-count"><?php echo $book_count; ?></div>
                <h5>Our Book Collection</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-users"></i></div>
                <div class="status-count"><?php echo $user_count; ?></div>
                <h5>Active Users</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-tablet-screen-button"></i></div>
                <div class="status-count"><?php echo $ebook_count; ?></div>
                <h5>E-Resourses</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-user-tie"></i></div>
                <div class="status-count"><?php echo $author_count; ?></div>
                <h5>Author</h5>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
