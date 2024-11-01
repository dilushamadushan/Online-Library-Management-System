
<?php include("header.php");?>
<head>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
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
                <button class="read-more-btn">Read More</button>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="content-card">
                <img src="assets/media/home-main/maga.jfif" alt="Magazine Image" class="img-fluid">
                <h4>MAG & ARTICLE</h4>
                <p>Stay updated with the latest articles and magazines on diverse topics. </p>
                <button class="read-more-btn">Read More</button>
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
                <button class="read-more-btn">Read More</button>
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
    <h2 class="fw-bold">Top News</h2>
    <p>Stay Updated with Our Newest Library Additions!</p>
    </div>
    <div class="decorative-line-wrapper">
        <div class="decorative-line"></div>
        <i class="fa-solid fa-newspaper"></i>
        <div class="decorative-line"></div>
    </div>
    <div class="news-card-main row mt-5">
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

<div class="status-section reveal">
    <div class="status-card-main row mt-5">
        <div class="col-md-3 mb-5">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-book-open-reader"></i></div>
                <div class="status-count">235k</div>
                <h5>Our Book Collection</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-users"></i></div>
                <div class="status-count">6543</div>
                <h5>Active Users</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-tablet-screen-button"></i></div>
                <div class="status-count">35</div>
                <h5>E-Resourses</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="status-card">
                <div class="status-icon"><i class="fa-solid fa-user-tie"></i></div>
                <div class="status-count">32</div>
                <h5>Author</h5>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
