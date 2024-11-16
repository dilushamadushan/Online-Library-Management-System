<?php 
include("config.php"); 
session_start();
$_SESSION["message"] = "";

// Function to generate User ID
function generateUserID($number) {
    return 'U' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Function to generate Ebook ID
function generateEbookID($number) {
    return 'E' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Function to generate Paper ID
function generatePaperID($number) {
    return 'P' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Function to generate Notice ID
function generateNoticeID($number) {
    return 'M' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Function to generate Past Paper ID
function generatePastPaperID($number) {
    return 'PP' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Function to generate Article/Magazine ID
function generateArticleID($number) {
    return 'A' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Add new user
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn'])) {
    $name = trim($_POST['name']);
    $mail = trim($_POST['mail']);
    $mobile = trim($_POST['mobile']);
    $addr = trim($_POST['addr']);

    if ($name && $mail && $mobile && $addr) {
        $query = "SELECT MAX(user_id) AS last_id FROM user_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastUserID = (int)str_replace('U', '', $row['last_id']);
        $newUserID = generateUserID($lastUserID + 1);

        $sql = "INSERT INTO user_table (user_id, User_Nmae, User_Emaiil , User_Mobile, User_Address, User_role) VALUES (?, ?, ?, ?, ?, 'user')";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $newUserID, $name, $mail, $mobile, $addr);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "User added successfully.";
        } else {
            $_SESSION["message"] = "Error adding user.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}

// Add new ebook
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-ebook-btn'])) {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $publisher = trim($_POST['publisher']);
    $year = trim($_POST['year']);

    if ($title && $author && $publisher && $year) {
        $query = "SELECT MAX(ebook_id) AS last_id FROM ebook_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastEbookID = (int)str_replace('E', '', $row['last_id']);
        $newEbookID = generateEbookID($lastEbookID + 1);

        $sql = "INSERT INTO ebook_table (ebook_id, title, author, publisher, year) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $newEbookID, $title, $author, $publisher, $year);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "Ebook added successfully.";
        } else {
            $_SESSION["message"] = "Error adding ebook.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}

// Add new paper
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-paper-btn'])) {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $journal = trim($_POST['journal']);
    $year = trim($_POST['year']);

    if ($title && $author && $journal && $year) {
        $query = "SELECT MAX(paper_id) AS last_id FROM paper_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastPaperID = (int)str_replace('P', '', $row['last_id']);
        $newPaperID = generatePaperID($lastPaperID + 1);

        $sql = "INSERT INTO paper_table (paper_id, title, author, journal, year) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $newPaperID, $title, $author, $journal, $year);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "Paper added successfully.";
        } else {
            $_SESSION["message"] = "Error adding paper.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}

// Add new notice
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-notice-btn'])) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title && $content) {
        $query = "SELECT MAX(notice_id) AS last_id FROM notice_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastNoticeID = (int)str_replace('M', '', $row['last_id']);
        $newNoticeID = generateNoticeID($lastNoticeID + 1);

        $sql = "INSERT INTO notice_table (notice_id, title, content) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $newNoticeID, $title, $content);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "Notice added successfully.";
        } else {
            $_SESSION["message"] = "Error adding notice.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}

// Add new past paper
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-new-paper'])) {
    $subject = trim($_POST['p-subject']);
    $exam = trim($_POST['exam']);
    $year = trim($_POST['year']);
    $pdf = $_FILES['pdf']['name'];
    $pdf_tmp = $_FILES['pdf']['tmp_name'];

    if ($subject && $exam && $year && $pdf) {
        $query = "SELECT MAX(p_id) AS last_id FROM past_paper_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastPaperID = (int)str_replace('PP', '', $row['last_id']);
        $newPaperID = generatePastPaperID($lastPaperID + 1);

        move_uploaded_file($pdf_tmp, "Past_papers/$pdf");

        $sql = "INSERT INTO past_paper_table (p_id, subject, examination_typ, year, pdf) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $newPaperID, $subject, $exam, $year, $pdf);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "Past paper added successfully.";
        } else {
            $_SESSION["message"] = "Error adding past paper.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}

// Add new article/magazine
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add-new-notice'])) {
    $title = trim($_POST['art-name']);
    $type = trim($_POST['type']);
    $writer = trim($_POST['writer']);
    $date = trim($_POST['date']);
    $description = trim($_POST['description']);
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $pdf = $_FILES['pdf']['name'];
    $pdf_tmp = $_FILES['pdf']['tmp_name'];

    if ($title && $type && $writer && $date && $description && $image && $pdf) {
        $query = "SELECT MAX(id) AS last_id FROM articles_table";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $lastArticleID = (int)str_replace('A', '', $row['last_id']);
        $newArticleID = generateArticleID($lastArticleID + 1);

        move_uploaded_file($image_tmp, "cover_folder/$image");
        move_uploaded_file($pdf_tmp, "Past_papers/$pdf");

        $sql = "INSERT INTO articles_table (id, title, type, writer, publish_date, description, image, pdf) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssss", $newArticleID, $title, $type, $writer, $date, $description, $image, $pdf);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION["message"] = "Article/Magazine added successfully.";
        } else {
            $_SESSION["message"] = "Error adding article/magazine.";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
    }
    header("Location: add-new.php"); // Redirect after POST to avoid resubmission
    exit();
}
?>

