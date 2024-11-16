<?php
    include("config.php");
   
    // Search functionality
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search'];
        $sql = "SELECT * FROM user_table WHERE User_Nmae LIKE '%$search%'"; // Reverted typo fix
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "SELECT * FROM user_table";
        $result = mysqli_query($conn, $sql);
    }

    // Edit user
    if (isset($_POST['edit-btn'])) {
        $id = $_POST['user_id'];
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $mobile = $_POST['mobile'];
        $addr = $_POST['addr'];
        $image = $_FILES['image']['name'];
        $target = "profile/".basename($image);

        $sql = "UPDATE user_table SET User_Name=?, User_Email=?, User_Mobile=?, User_Address=?, User_profile=? WHERE user_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $mail, $mobile, $addr, $image, $id); // Fixed parameter types
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            $_SESSION['message'] = "User updated successfully";
        } else {
            $_SESSION['message'] = "Failed to update user";
        }
    }

    // Delete user
    if (isset($_POST['delete-btn'])) {
        $id = $_POST['user_id'];

        $sql = "DELETE FROM user_table WHERE user_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id); // Fixed parameter type
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION['message'] = "User deleted successfully";
        } else {
            $_SESSION['message'] = "Failed to delete user";
        }
    }
?>

