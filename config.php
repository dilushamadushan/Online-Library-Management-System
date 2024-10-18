<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbport = 3307;
$dbname = "library_management_system";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname, $dbport);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully."; // This should display if the connection is good
}

$conn->close(); // Close the connection after testing
?>