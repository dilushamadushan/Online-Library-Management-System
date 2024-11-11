<?php 
    include("config.php"); 
?>
<?php 
include("config.php");
    function generateUserID($number) {
        return 'U' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    $query = "SELECT MAX(user_id) AS last_id FROM user_table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $lastUserID = (int)str_replace('U', '', $row['last_id']);
    $newUserID = generateUserID($lastUserID + 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn'])) {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $mobile = trim($_POST['mobile']);
        $addr = trim($_POST['addr']);

        if ($name && $mail && $mobile && $addr) {
        
            $sql = "INSERT INTO user_table (user_id,User_Nmae, User_Emaiil, User_Mobile, User_Address,User_role) VALUES ( '$newUserID','$name' , '$mail',$mobile, '$addr','user')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Added Successfully');</script>";
            } else {
                echo "<script>alert('Add Failed');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields.');</script>";
        }
    }
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn'])) {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $mobile = trim($_POST['mobile']);
        $addr = trim($_POST['addr']);

        if ($name && $mail && $mobile && $addr) {
            $sql = "INSERT INTO user_table (user_id,User_Nmae, User_Emaiil, User_Mobile, User_Address,User_role) VALUES ( '$newUserID','$name' , '$mail',$mobile, '$addr','user')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Added Successfully');</script>";
            } else {
                echo "<script>alert('Add Failed');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields.');</script>";
        }
    }
?>

<?php
    function generateEbookID($number) {
        return 'E' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    $query = "SELECT MAX(e_book_id) AS last_id FROM e_book_table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $lastEbookID = (int)str_replace('E', '', $row['last_id']);
    $newEbookID = generateEbookID($lastEbookID + 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn4'])) {
        $ename = trim($_POST['eb-name']);
        $isbn = trim($_POST['ISB-no']);
        $subject = trim($_POST['subject']);
        $year = trim($_POST['year']);
        $author = trim($_POST['author']);

        if ($ename && $isbn && $subject && $year && $author && isset($_FILES['pdf']) && isset($_FILES['image'])) {
            $pdf = $_FILES['pdf']['name'];
            $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
            $pdf_extension = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));
            $allowed_pdf_extensions = ['pdf'];

            $cover = $_FILES['image']['name'];
            $cover_tmp_name = $_FILES['image']['tmp_name'];
            $cover_extension = strtolower(pathinfo($cover, PATHINFO_EXTENSION));
            $allowed_cover_extensions = ['png', 'jpeg', 'jpg'];

            if (in_array($cover_extension, $allowed_cover_extensions)) {
                $time = time();
                $new_cover_name = $time . '_' . $cover;
                $cover_folder = 'cover_folder/' . $new_cover_name;
                if (move_uploaded_file($cover_tmp_name, $cover_folder)) {

                    if (in_array($pdf_extension, $allowed_pdf_extensions)) {
                        $new_pdf_name = $time . '_' . $pdf;
                        $pdf_folder = 'E_books/' . $new_pdf_name;

                        if (move_uploaded_file($pdf_tmp_name, $pdf_folder)) {
                            $sql = "INSERT INTO e_book_table (e_book_id, e_book_name, ISBN_no, subject,author, publish_year, pdf, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "sssssss", $newEbookID, $ename, $isbn, $subject,$author, $year, $new_pdf_name, $new_cover_name);
                            $result = mysqli_stmt_execute($stmt);

                            if ($result) {
                                echo "<script>alert('Added Successfully');</script>";
                            } else {
                                echo "<script>alert('Add Failed');</script>";
                            }
                        } else {
                            echo "<script>alert('PDF upload failed');</script>";
                        }
                    } else {
                        echo "<script>alert('Invalid PDF file type');</script>";
                    }
                } else {
                    echo "<script>alert('Cover upload failed');</script>";
                }
            } else {
                echo "<script>alert('Invalid cover file type');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields');</script>";
        }
    }
?>

<?php
    function generatePaperID($number) {
        return 'P' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    $query = "SELECT MAX(p_id) AS last_id FROM past_paper_table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $lastPaperID = (int)str_replace('P', '', $row['last_id']);
    $newPaperID = generatePaperID($lastPaperID + 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-paper'])) {
        $id = trim($_POST['p-subject']);
        $exam = trim($_POST['exam']);
        $year = trim($_POST['year']);

        if ($id && $exam && $year && isset($_FILES['pdf'])) {
            $pdf = $_FILES['pdf']['name'];
            $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
            $pdf_extension = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));
            $allowed_extensions = ['pdf'];

            if (in_array($pdf_extension, $allowed_extensions)) {
                $time = time();
                $new_pdf_name = $time . '_' . $pdf;
                $pdf_folder = 'Past_Paper/' . $new_pdf_name;

                if (move_uploaded_file($pdf_tmp_name, $pdf_folder)) {
                    $sql = "INSERT INTO past_paper_table (p_id, subject, examination_typ, year, pdf) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "sssis", $newPaperID, $id, $exam, $year, $new_pdf_name);
                    $result = mysqli_stmt_execute($stmt);

                    if ($result) {
                        echo "<script>alert('Added Successfully');</script>";
                    } else {
                        echo "<script>alert('Add Failed');</script>";
                    }
                } else {
                    echo "<script>alert('File upload failed');</script>";
                }
            } else {
                echo "<script>alert('Invalid file type');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields');</script>";
        }
    }
?>
<?php
    function generateNoticeID($number) {
        return 'M' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    $query = "SELECT MAX(id) AS last_id FROM articles_table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $lastNoticeID = (int)str_replace('M', '', $row['last_id']);
    $newNoticeID = generateNoticeID($lastNoticeID + 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn5'])) {
        $title = trim($_POST['art-name']);
        $date = trim($_POST['date']);
        $writer = trim($_POST['writer']);
        $type = trim($_POST['type']);
        $description = trim($_POST['description']);

        if ($title && $date && $writer && $type && $description && isset($_FILES['pdf']) && isset($_FILES['image'])) {
            $pdf = $_FILES['pdf']['name'];
            $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
            $pdf_extension = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));
            $allowed_pdf_extensions = ['pdf'];

            $cover = $_FILES['image']['name'];
            $cover_tmp_name = $_FILES['image']['tmp_name'];
            $cover_extension = strtolower(pathinfo($cover, PATHINFO_EXTENSION));
            $allowed_cover_extensions = ['png', 'jpeg', 'jpg'];

            if (in_array($pdf_extension, $allowed_pdf_extensions) && in_array($cover_extension, $allowed_cover_extensions)) {
                $time = time();
                $new_pdf_name = $time . '_' . $pdf;
                $pdf_folder = 'articles/' . $new_pdf_name;
                $new_cover_name = $time . '_' . $cover;
                $cover_folder = 'cover_folder/' . $new_cover_name;

                if (move_uploaded_file($pdf_tmp_name, $pdf_folder) && move_uploaded_file($cover_tmp_name, $cover_folder)) {
                    $sql = "INSERT INTO articles_table (id, title, writer, type, publish_date, description, image, pdf) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssssssss", $newNoticeID, $title, $writer, $type, $date, $description, $new_cover_name, $new_pdf_name);
                    $result = mysqli_stmt_execute($stmt);

                    if ($result) {
                      
                        ?>
                        <script>
                            Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success"
                            });
                         </script>;
                      <?php
                    } else {
                        echo "<script>alert('Add Failed');</script>";
                    }
                } else {
                    echo "<script>alert('File upload failed');</script>";
                }
            } else {
                echo "<script>alert('Invalid file type');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields');</script>";
        }
    }
?>
