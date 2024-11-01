<footer class="text-white mt-auto py-4">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-md-3 contact-info">
                <h5>Library</h5>
                <div class="line-foo"></div>
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-phone"></i> Phone</li>
                    <li class="ms-5">General: 071999999</li>
                    <li class="ms-5">Librarian: 09877</li>
                    <li><i class="fa-solid fa-fax"></i> Fax: +94 4122888888</li>
                    <li><i class="fa-solid fa-envelope"></i> E-mail: librarian@.lk</li>
                </ul>
            </div>

            <div class="col-md-3 quick-links">
                <h5>Quick Links</h5>
                <div class="line-foo"></div>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Author</a></li>
                    <li><a href="#">Event & News</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-3 catalog">
                <h5>Catalog</h5>
                <div class="line-foo"></div>
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-book"></i> <a href="#">Book</a></li>
                    <li><i class="fa-solid fa-database"></i> <a href="#">E-Resources</a></li>
                    <li><i class="fa-solid fa-file"></i> <a href="#">Magazine & Article</a></li>
                    <li><i class="fa-solid fa-paperclip"></i> <a href="#">Past Paper</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-center">
                <div class="visit-counter">
                    <div class="line-foo"></div>
                    <div class="px-2 fw-bolder">Visit Counter</div>
                    <div class="line-foo"></div>
                </div>
                <p><i class="fa-solid fa-chart-simple"></i> <span class="ms-2">Total Visit</span></p>
                <div class="total-count">
                <?php
                    //   mysqli_query($conn, "UPDATE views_count SET value = value + 1 WHERE name = 'hits'");
                    //
                    //    $result_view = mysqli_query($conn, "SELECT * FROM views_count WHERE name = 'hits'");
                    //    
                    //    if ($result_view) {
                    //        while($row = mysqli_fetch_array($result_view)) {
                    //            echo $row['value'];
                    //        }
                    //    } else {
                    //        echo "Error fetching data.";
                    //    }
                    ?>
                </div>

                <i class="fa-solid fa-hands-holding-circle icon-center"></i>
            </div>
        </div>
        <hr class="border-light">
        <div class="foo-text-center">
            <p>&copy; 2024 Public Library. All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.7.1.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>