<?php
session_start();
include("config.php");
function generateUserID($number) {
return 'U' . str_pad($number, 3, '0', STR_PAD_LEFT);
}

// Retrieve last user ID from database and increment it
$query = "SELECT MAX(user_id) AS last_id FROM user_table";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$lastUserID = (int)str_replace('U', '', $row['last_id']);
$newUserID = generateUserID($lastUserID + 1);

// Save new user to database
$name = $_POST['name'];
$email = $_POST['email'];

$insertQuery = "INSERT INTO users (user_id, name, email) VALUES ('$newUserID', '$name', '$email')";
mysqli_query($conn, $insertQuery);

echo "User registered with ID: " . $newUserID;
?>